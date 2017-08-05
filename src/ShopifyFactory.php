<?php

namespace Dpc\LaravelShopify;

use Dpc\LaravelShopify\Contracts\ShopifyFactoryContract;

class ShopifyFactory implements ShopifyFactoryContract
{
    public function __get($method)
    {
        $class = __NAMESPACE__ . '\\Modules\\' . ucfirst($method);
        return app($class);
    }
}