<?php

namespace App\Models;

/**
 * Class FriendshipLink
 *
 * @property int    $id   主键ID
 * @property string $name 链接名
 * @property string $url  链接地址
 * @property bool   $sort 排序
 *
 * @author  hanmeimei
 */
class FriendshipLink extends Base
{
    public function setSortAttribute($value)
    {
        $this->attributes['sort'] = empty($value) ? null : $value;
    }

    /**
     * 给url添加 http 或者删除 /
     *
     * @param string $value
     *
     * @author hanmeimei
     */
    public function setUrlAttribute(string $value)
    {
        $this->attributes['url'] = format_url($value);
    }
}
