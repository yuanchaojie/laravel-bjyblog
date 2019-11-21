<?php

namespace Tests\Commands\Upgrade\V5_8_4_0\Seeds;

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('configs')->truncate();

        \DB::table('configs')->insert([
            [
                'id'         => 101,
                'name'       => 'app.name',
                'value'      => '袁超杰博客',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 102,
                'name'       => 'bjyblog.head.keywords',
                'value'      => '个人博客,博客模板,thinkphp,laravel博客,php博客,技术博客,袁超杰',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 103,
                'name'       => 'bjyblog.head.description',
                'value'      => '袁超杰的php博客,个人技术博客,bjyblog,bjyadmin官方网站',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 107,
                'name'       => 'bjyblog.water.text',
                'value'      => 'baijunyao.com',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 109,
                'name'       => 'bjyblog.water.size',
                'value'      => '15',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 110,
                'name'       => 'bjyblog.water.color',
                'value'      => '#008CBA',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 117,
                'name'       => 'bjyblog.icp',
                'value'      => '豫ICP备14009546号-3',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 118,
                'name'       => 'bjyblog.admin_email',
                'value'      => 'baijunyao@baijunyao.com',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 119,
                'name'       => 'bjyblog.copyright_word',
                'value'      => '本文为袁超杰原创文章,转载无需和我联系,但请注明来自<a href="http://deatrabbit.top">袁超杰博客</a>http://deatrabbit.top',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 123,
                'name'       => 'bjyblog.statistics',
                'value'      => '',
                'created_at' => '2018-08-25 17:04:02',
                'updated_at' => '2018-08-25 17:04:02',
                'deleted_at' => null,
            ],
            [
                'id'         => 125,
                'name'       => 'bjyblog.author',
                'value'      => '袁超杰',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 128,
                'name'       => 'bjyblog.baidu_site_url',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 141,
                'name'       => 'bjyblog.alt_word',
                'value'      => '袁超杰博客',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 142,
                'name'       => 'mail.host',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 143,
                'name'       => 'mail.username',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 144,
                'name'       => 'mail.password',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 145,
                'name'       => 'mail.from.name',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 148,
                'name'       => 'bjyblog.notification_email',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 149,
                'name'       => 'bjyblog.head.title',
                'value'      => '袁超杰博客,技术博客,个人博客模板, php博客系统',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 150,
                'name'       => 'bjyblog.qq_qun.article_id',
                'value'      => '1',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 151,
                'name'       => 'bjyblog.qq_qun.number',
                'value'      => '88199093',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 152,
                'name'       => 'bjyblog.qq_qun.code',
                'value'      => '<a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=bba3fea90444ee6caf1fb1366027873fe14e86bada254d41ce67768fadd729ee"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="袁超杰博客群" title="袁超杰博客群"></a>',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 153,
                'name'       => 'bjyblog.qq_qun.or_code',
                'value'      => '/uploads/images/default.png',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 154,
                'name'       => 'mail.driver',
                'value'      => 'smtp',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 155,
                'name'       => 'mail.port',
                'value'      => '465',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 156,
                'name'       => 'mail.encryption',
                'value'      => 'ssl',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 157,
                'name'       => 'mail.from.address',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 158,
                'name'       => 'sentry.dsn',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 159,
                'name'       => 'database.connections.mysql.dump.dump_binary_path',
                'value'      => '/bin/',
                'created_at' => '2018-12-03 21:39:22',
                'updated_at' => '2018-12-03 21:39:22',
                'deleted_at' => null,
            ],
            [
                'id'         => 160,
                'name'       => 'filesystems.disks.oss.access_id',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 161,
                'name'       => 'filesystems.disks.oss.access_key',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 162,
                'name'       => 'filesystems.disks.oss.bucket',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 163,
                'name'       => 'filesystems.disks.oss.endpoint',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 164,
                'name'       => 'backup.backup.destination.disks',
                'value'      => '[]',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 165,
                'name'       => 'backup.notifications.mail.to',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 166,
                'name'       => 'app.locale',
                'value'      => 'en',
                'created_at' => '2019-02-26 21:10:52',
                'updated_at' => '2019-02-26 21:10:52',
                'deleted_at' => null,
            ],
        ]);
    }
}
