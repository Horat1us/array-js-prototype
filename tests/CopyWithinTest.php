<?php
namespace Horat1us\Arrays\Tests;
use Horat1us\Arrays\Collection;

/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 10:22 PM
 */
class CopyWithinTest extends AbstractTestCase
{
    public function testFirst()
    {
        $array = \Horat1us\Arrays\Collection::create([1, 2, 3, 4, 5])->copyWithin(0, 3);
        $this->assertCollectionEqual($array, [4, 5, 3, 4, 5]);
    }

    public function testSecond()
    {
        $array = Collection::create([1,2,3,4,5])->copyWithin(0,3,4);
        $this->assertCollectionEqual($array, [4,2,3,4,5]);
    }

    public function testThird()
    {
        $array = Collection::create([1,2,3,4,5])->copyWithin(0, -2, -1);
        $this->assertCollectionEqual($array, [4,2,3,4,5]);
    }
}