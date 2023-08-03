<?php

/**
 * This file is part of the Themismin\LaravelKuaishou.
 *
 * (c) themismin <nanye@themismin.cn>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Themismin\LaravelKuaishou\Platform\Content;

use Themismin\LaravelKuaishou\Kernel\Contracts\ServiceProviderInterface;
use Illuminate\Container\Container;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['content'] = function ($app) {
            return new Content($app);
        };
    }
}
