<?php

namespace HughCube;

use ReflectionClass;
use ReflectionException;
use ReflectionMethod;

trait StaticInstanceTrait
{
    private static $classSelfInstances = [];

    /**
     * @param  bool  $refresh
     * @return static
     */
    public static function instance(bool $refresh = false)
    {
        $class = static::class;

        if ($refresh || !isset(self::$classSelfInstances[$class])) {
            self::$classSelfInstances[$class] = static::newInstance();
        }

        return self::$classSelfInstances[$class];
    }

    /**
     * @return static
     */
    public static function newInstance()
    {
        $class = static::class;
        return new $class(...func_get_args());
    }
}
