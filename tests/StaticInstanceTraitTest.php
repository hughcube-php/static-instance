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
        $instance = StaticInstanceTest::instance();
        $this->assertInstanceOf(StaticInstanceInterface::class, $instance);

        $this->assertSame($instance, StaticInstanceTest::instance());

        $this->assertNotSame($instance, StaticInstanceTest::instance(true));
    }

    public function testTmplement()
    {
        $instance = StaticInstanceImplementTest::instance();

        $this->assertInstanceOf(StaticInstanceInterface::class, $instance);
        $this->assertInstanceOf(StaticInstanceTest::class, $instance);

        $this->assertNotSame($instance, StaticInstanceTest::instance());

        $this->assertSame($instance, StaticInstanceImplementTest::instance());
    }
}

class StaticInstanceTest implements StaticInstanceInterface
{
    use StaticInstanceTrait;
}

class StaticInstanceImplementTest extends StaticInstanceTest
{
}
