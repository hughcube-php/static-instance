<?php
/**
 * Created by PhpStorm.
 * User: hugh.li
 * Date: 2021/12/17
 * Time: 18:45
 */

namespace HughCube\StaticInstance\Tests;

use HughCube\StaticInstanceInterface;
use HughCube\StaticInstanceTrait;

class StaticInstanceClass implements StaticInstanceInterface
{
    use StaticInstanceTrait;

    public $value = 1;

    public $value2 = 1;

    public function __construct($value = 1, $value2 = 1)
    {
        $this->value = $value;
        $this->value2 = $value2;
    }
}
