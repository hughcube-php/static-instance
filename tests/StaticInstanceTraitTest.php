<?php

namespace HughCube\StaticInstance\Tests;

use HughCube\StaticInstanceInterface;
use PHPUnit\Framework\TestCase;

class StaticInstanceTraitTest extends TestCase
{
    public function testInstance()
    {
        $instance = StaticInstanceClass::instance();

        $this->assertSame($instance->value, 1);
        $this->assertSame($instance, StaticInstanceClass::instance());
        $this->assertInstanceOf(StaticInstanceClass::class, $instance);
        $this->assertInstanceOf(StaticInstanceInterface::class, $instance);

        $newInstance = StaticInstanceClass::instance(true);
        $this->assertNotSame($instance, $newInstance);
        $this->assertInstanceOf(StaticInstanceClass::class, $newInstance);
        $this->assertInstanceOf(StaticInstanceInterface::class, $newInstance);

        $newInstance = StaticInstanceClass::new(3, 5);
        $this->assertNotSame($instance, $newInstance);
        $this->assertSame($newInstance->value, 3);
        $this->assertSame($newInstance->value2, 5);
        $this->assertInstanceOf(StaticInstanceClass::class, $newInstance);
        $this->assertInstanceOf(StaticInstanceInterface::class, $newInstance);

        $newInstance = StaticInstanceClass::newInstance(3, 5);
        $this->assertNotSame($instance, $newInstance);
        $this->assertSame($newInstance->value, 3);
        $this->assertSame($newInstance->value2, 5);
        $this->assertInstanceOf(StaticInstanceClass::class, $newInstance);
        $this->assertInstanceOf(StaticInstanceInterface::class, $newInstance);
    }
}
