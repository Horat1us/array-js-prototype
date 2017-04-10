<?php
namespace Horat1us\Arrays\Tests;
/**
 * Class ConstructorTest
 */
class ConstructorTest extends \PHPUnit_Framework_TestCase
{
    public function testWithFewElements()
    {
        $array = new \Horat1us\Arrays\Collection(1, 2, 3);
        $this->assertEquals(3, count($array));
        for ($i = 0; $i < 3; $i++) {
            $this->assertEquals($i + 1, $array[$i]);
        }
    }

    public function testWithInitialArray()
    {
        $array = new \Horat1us\Arrays\Collection([1, 2, 3]);
        $this->assertEquals(3, count($array));
        for ($i = 0; $i < 3; $i++) {
            $this->assertEquals($i + 1, $array[$i]);
        }
    }

    public function testEmptyArray()
    {
        $array = new \Horat1us\Arrays\Collection();
        $this->assertEquals(0, count($array));
    }

    public function testWithLength()
    {
        $arrayLength = 4;
        $array = new \Horat1us\Arrays\Collection($arrayLength);
        $this->assertEquals($arrayLength, count($array));
    }

    public function testUsingCreateMethods()
    {
        $array = \Horat1us\Arrays\Collection::create(2);
        $this->assertInstanceOf(\Horat1us\Arrays\Collection::class, $array);
        $this->assertEquals(2, count($array));
    }
}