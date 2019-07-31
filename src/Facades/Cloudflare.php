<?php

namespace Teakowa\Cloudflare\Facades;

use Illuminate\Support\Facades\Facade;

class Cloudflare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-cloudflare';
    }
}
