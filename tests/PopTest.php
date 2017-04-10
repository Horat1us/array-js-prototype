<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 10:52 PM
 */

namespace Horat1us\Arrays\Tests;


use Horat1us\Arrays\Collection;

class PopTest extends AbstractTestCase
{

    public function testPop()
    {
        $collection = Collection::create([1, 2, 3,]);
        for ($i = 2; $i > 0; $i--) {
            $this->assertEquals($i+1, $collection->pop());
            $this->assertCount($i, $collection);
        }
    }
}