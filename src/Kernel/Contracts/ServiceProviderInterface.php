<?php

/**
 * This file is part of the Themismin\LaravelKuaishou.
 *
 * (c) themismin <nanye@themismin.cn>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Themismin\LaravelKuaishou\Kernel\Contracts;

use Illuminate\Container\Container;

interface ServiceProviderInterface
{
    public function register(Container $app);
}
