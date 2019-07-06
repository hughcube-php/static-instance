<?php

namespace HughCube;

interface StaticInstanceInterface
{
    /**
     * 获取实例
     *
     * @return static
     */
    public static function instance();
}
