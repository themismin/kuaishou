<?php

/**
 * This file is part of the Themismin\LaravelKuaishou.
 *
 * (c) themismin <nanye@themismin.cn>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Themismin\LaravelKuaishou;

use Illuminate\Support\Str;

/**
 * Class Factory.
 *
 * @method static Themismin\LaravelKuaishou\Platform\Application            platform(array $config)
 */
class Factory
{
    /**
     * @param string $name
     * @param array  $config
     *
     * @return Themismin\LaravelKuaishou\Kernel\ServiceContainer
     */
    public static function make($name, array $config)
    {
        $namespace = Str::studly($name);
        $application = "\\Themismin\\LaravelKuaishou\\{$namespace}\\Application";

        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
