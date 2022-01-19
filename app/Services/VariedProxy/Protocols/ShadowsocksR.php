<?php

namespace App\Services\VariedProxy\Protocols;

use App\Models\Proxy;

class ShadowsocksR
{

    protected $proxy;

    public function __construct(Proxy $proxy = null)
    {
        $this->proxy = $proxy;
    }

    public function format(Proxy $proxy = null)
    {
        $proxy = $proxy ?: $this->proxy;
        return array_merge(
            $proxy->only([
                'name',
                'type',
                'server',
                'port',
                'cipher',
                'password']),
            $proxy->extra);
    }

}
