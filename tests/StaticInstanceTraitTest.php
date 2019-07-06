<?php

namespace HughCube\StaticInstance\Tests;

use HughCube\StaticInstanceInterface;
use HughCube\StaticInstanceTrait;
use Mockery;
use PHPUnit\Framework\TestCase;

class StaticInstanceTraitTest extends TestCase
{
    public function testInstance()
    {
        /** @var InstanceTest $class */
        $class = Mockery::mock(StaticInstanceTest::class)->makePartial();

        $instance1 = $class::instance();
        $this->assertInstanceOf(StaticInstanceInterface::class, $instance1);

        $instance2 = $class::instance();
        $this->assertSame($instance1, $instance2);

        $instance3 = $class::instance(true);
        $this->assertNotSame($instance3, $instance1);
    }
}

class StaticInstanceTest implements StaticInstanceInterface
{
    use StaticInstanceTrait;
}
