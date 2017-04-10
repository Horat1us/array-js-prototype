<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:50 PM
 */

namespace Horat1us\Arrays\Tests;


use Horat1us\Arrays\Collection;

class UnshiftTest extends AbstractTestCase
{
    public function testCase()
    {
        $collection = Collection::create([1, 2]);
        $this->assertEquals($collection->unshift(0), $collection->count());
        $this->assertCollectionEqual($collection, [0, 1, 2]);
    }
}