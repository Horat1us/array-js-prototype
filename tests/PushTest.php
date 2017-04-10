<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 10:57 PM
 */

namespace Horat1us\Arrays\Tests;


use Horat1us\Arrays\Collection;

class PushTest extends AbstractTestCase
{
    /**
     * Just push few elements
     */
    public function testCase()
    {
        $collection = Collection::create([1, 2]);
        $this->assertEquals(4, $collection->push(1, 2));
        $this->assertCollectionEqual($collection, [1, 2, 1, 2]);
    }

    /**
     * Merging two arrays
     */
    public function testApply()
    {
        $collection = Collection::create([1, 2]);
        $this->assertEquals(4, call_user_func_array([$collection, 'push'], [3, 4]));
        $this->assertCollectionEqual($collection, [1, 2, 3, 4]);
    }
}