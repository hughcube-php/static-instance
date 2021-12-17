<?php

namespace HughCube;

use ReflectionClass;
use ReflectionException;
use ReflectionMethod;

trait StaticInstanceTrait
{
    private static $__________instances = [];

    /**
     * 获取实例
     *
     * @param  bool  $refresh
     * @return static
     */
    public static function instance($refresh = false)
    {
        $class = static::class;

        if ($refresh || !isset(self::$__________instances[$class])) {
            self::$__________instances[$class] = static::newInstance();
        }

        return self::$__________instances[$class];
    }

    public static function newInstance()
    {
        $class = static::class;
        $args = func_get_args();

        if (empty($args)) {
            return new $class();
        }

        return new $class(...$args);
    }
}
