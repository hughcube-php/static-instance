<?php

namespace HughCube;

trait StaticInstanceTrait
{
    private static $__________instances = [];

    /**
     * 获取实例
     *
     * @param bool $refresh
     * @return static
     */
    public static function instance($refresh = false)
    {
        $className = get_called_class();

        if ($refresh || !isset(self::$__________instances[$className])) {
            self::$__________instances[$className] = new static();
        }

        return self::$__________instances[$className];
    }
}
