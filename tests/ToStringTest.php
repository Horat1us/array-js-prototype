<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 25.06.2017
 * Time: 0:06
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use ToString;
use PHPUnit\Framework\TestCase;

class ToStringTest extends AbstractTestCase
{
    public function testCaseOne()
    {
        $collection=Collection::create([2,3,1]);
        $this->assertEquals("2,3,1",$collection->toString());
    }

    public function testCaseTwo()
    {
        $collection=Collection::create([2,3,1]);
        $this->assertEquals("2,3,1",$collection->__toString());
    }

    public function testCaseThree()
    {
        $collection=Collection::create(["one","two","three"]);
        $this->assertEquals("one,two,three",$collection->__toString());
    }
}
