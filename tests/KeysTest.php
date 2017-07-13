<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 15:02
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use Keys;
use PHPUnit\Framework\TestCase;

class KeysTest extends AbstractTestCase
{
    public function testDefaultIndexes()
    {
        $collection=Collection::create(["twenty","one","pilots","one","two","eight","four"]);
        $this->assertEquals([0,1,2,3,4,5,6],$collection->keys());
    }

    public function testCustomIndexes()
    {
        $collection=Collection::create(["how_many"=>"twenty","how_many_two"=>"one","who"=>"pilots", "some"=>"one","two", "ali"=>"eight", "four"]);
        $this->assertEquals(["how_many","how_many_two","who","some",0,"ali",1],$collection->keys());
    }
}
