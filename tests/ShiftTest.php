<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:05 PM
 */

namespace Horat1us\Arrays\Tests;


use Horat1us\Arrays\Collection;

class ShiftTest extends AbstractTestCase
{
    public function testCase()
    {
        $collection = Collection::create(['clown', 'angel', 'killer']);
        $this->assertEquals('clown', $collection->shift());
        $this->assertCount(2, $collection);
    }
}