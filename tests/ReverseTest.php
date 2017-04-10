<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:01 PM
 */

namespace Horat1us\Arrays\Tests;


use Horat1us\Arrays\Collection;

class ReverseTest extends AbstractTestCase
{

    /**
     * Just reverse simple array
     */
    public function testCase()
    {
        $collection = Collection::create(['one', 'two', 'three'])->reverse();
        $this->assertCollectionEqual($collection, ['three', 'two', 'one']);
    }
}