<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 14:33
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use IndexOf;
use PHPUnit\Framework\TestCase;

class IndexOfTest extends AbstractTestCase
{
    public function testWithIntOne()
    {
        $collection=Collection::create([4,12,3,5,77]);
        $this->assertEquals(4,$collection->indexOf(77));
    }

    public function testCWithIntTwo()
    {
        $collection=Collection::create([9,22,8,14,88]);
        $this->assertEquals(-1,$collection->indexOf(77));
    }

    public function testWithString()
    {
        $collection=Collection::create(["id1"=>"one","id2"=>22,"id_of_2"=>"two","id4"=>14,"id5"=>"three"]);
        $this->assertEquals("id_of_2",$collection->indexOf("two"));
    }
}
