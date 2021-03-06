<?php

namespace Tests\Commands\Upgrade\V5_8_3_0\Seeds;

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sites')->truncate();
        \DB::table('sites')->insert([
            [
                'id'            => 1,
                'oauth_user_id' => 1,
                'name'          => '袁超杰博客',
                'description'   => '袁超杰的个人博客',
                'url'           => 'http://deatrabbit.top',
                'audit'         => 0,
                'sort'          => 1,
                'created_at'    => '2018-11-15 20:35:12',
                'updated_at'    => '2018-11-15 20:35:12',
                'deleted_at'    => null,
            ],
            [
                'id'            => 2,
                'oauth_user_id' => 1,
                'name'          => '已删除',
                'description'   => '用于测试',
                'url'           => 'https://deleted.com',
                'audit'         => 1,
                'sort'          => 1,
                'created_at'    => '2019-01-04 16:35:12',
                'updated_at'    => '2019-01-04 16:35:12',
                'deleted_at'    => '2019-01-04 16:35:12',
            ],
        ]);
    }
}
