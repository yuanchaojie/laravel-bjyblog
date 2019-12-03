<?php

namespace App\Observers;

use App\Models\ArticleTag;
use Artisan;
use Markdown;

class ArticleObserver extends BaseObserver
{
    public function created($model)
    {
        parent::created($model);

        Artisan::queue('bjyblog:generateSitemap');
    }

    public function saving($article)
    {
        if (empty($article->description)) {
            $article->description = preg_replace(
                ['/[~*>#-]*/', '/!?\[.*\]\(.*\)/', '/\[.*\]/'],
                '',
                $article->markdown
            );
        }

        if (empty($article->cover)) {
            $article->cover = $article->getCover($article->markdown);
        }

        if (empty($article->is_top)) {
            $article->is_top = 0;
        }

        if ($article->isDirty('title') && empty($article->slug)) {
            $article->slug = generate_english_slug($article->title);
        }

        // file_put_contents("/tmp/debug.info","\n".json_encode($article),FILE_APPEND);
        $article->html = Markdown::convertToHtml($article->markdown);
        file_put_contents("/tmp/debug.info","\n".'观察 saving ',FILE_APPEND);
        file_put_contents("/tmp/debug.info","\n".json_encode($article->html),FILE_APPEND);
    }

    public function deleted($article)
    {
        file_put_contents("/tmp/debug.info","\n".'观察 deleted',FILE_APPEND);
        // 删除文章后同步删除关联表 article_tags 中的数据
        if ($article->isForceDeleting()) {
            ArticleTag::onlyTrashed()->where('article_id', $article->id)->forceDelete();
            flash_success('彻底删除成功');
        } else {
            Artisan::queue('bjyblog:generateSitemap');
            ArticleTag::where('article_id', $article->id)->delete();
            flash_success('删除成功');
        }
    }

    public function restored($article)
    {
        file_put_contents("/tmp/debug.info","\n".'观察 restored ',FILE_APPEND);
        // 恢复删除的文章后同步恢复关联表 article_tags 中的数据
        ArticleTag::onlyTrashed()->where('article_id', $article->id)->restore();
        flash_success('恢复成功');
    }
}
