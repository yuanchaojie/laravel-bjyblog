<?php

namespace Tests\Unit\Support;

use Tests\TestCase;

class HelpersTest extends TestCase
{
    public function testFormatUrl()
    {
        static::assertEquals('http://deatrabbit.top', format_url('baijunyao.com'));
        static::assertEquals('http://deatrabbit.top', format_url('http://deatrabbit.top'));
        static::assertEquals('http://deatrabbit.top', format_url('http://deatrabbit.top'));
        static::assertEquals('http://deatrabbit.top', format_url('https://BaiJunYao.com'));
        static::assertEquals('http://deatrabbit.top', format_url('http://deatrabbit.top/'));
    }

    public function testIsTrue()
    {
        static::assertTrue(is_true('true'));
        static::assertTrue(is_true(true));
    }

    public function testIsFalse()
    {
        static::assertTrue(is_false('false'));
        static::assertTrue(is_false(false));
    }
}
