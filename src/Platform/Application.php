<?php

/**
 * This file is part of the Themismin\LaravelKuaishou.
 *
 * (c) themismin <nanye@themismin.cn>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Themismin\LaravelKuaishou\Platform;

use Themismin\LaravelKuaishou\Kernel\ServiceContainer;

class Application extends ServiceContainer
{
    protected $providers = [
        Oauth\ServiceProvider::class,
        Content\ServiceProvider::class,
    ];

    /**
     * Handle dynamic calls.
     *
     * @param string $method
     * @param array  $args
     *
     * @return mixed
     */
    public function __call($method, $args)
    {
        return $this->base->$method(...$args);
    }
}
