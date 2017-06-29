<?php


namespace Horat1us\Arrays\Tests;



/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 10:24 PM
 */
abstract class AbstractTestCase extends \PHPUnit\Framework\TestCase
{
    protected function assertCollectionEqual(\Horat1us\Arrays\Collection $collection, array $array)
    {
        $this->assertEquals(count($array), $collection->count());
        foreach ($array as $key => $value) {
            $this->assertArrayHasKey($key, $collection);
            $this->assertEquals($collection[$key], $value);
        }
    }
}