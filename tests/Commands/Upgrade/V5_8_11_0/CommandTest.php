<?php

namespace Tests\Commands\Upgrade\V5_8_11_0;

use Artisan;

class CommandTest extends \Tests\Commands\Upgrade\TestCase
{
    public function testCommand()
    {
        Artisan::call('upgrade:v5.8.11.0');

        $this->assertDatabaseHas('configs', [
            'id'         => 172,
            'name'       => 'bjyblog.cdn_domain',
            'value'      => '',
            'created_at' => '2019-08-05 22:15:00',
            'updated_at' => '2019-08-05 22:15:00',
            'deleted_at' => null,
        ]);
    }
}
