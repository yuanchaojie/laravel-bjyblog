<?php

namespace Tests\Commands\Upgrade\V5_8_1_0\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddRememberTokenForOauthUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::table('oauth_users', function (Blueprint $table) {
            $table->string('remember_token', 100)
                ->after('is_admin')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Schema::table('oauth_users', function (Blueprint $table) {
            $table->dropColumn('remember_token');
        });
    }
}
