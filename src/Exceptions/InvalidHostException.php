<?php

namespace Dpc\LaravelShopify\Exceptions;


class InvalidHostException extends \Exception
{

    /**
     * InvalidHostException constructor.
     */
    public function __construct()
    {
        parent::__construct('Host is invalid');
    }
}