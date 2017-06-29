<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 14:57
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use Join;
use PHPUnit\Framework\TestCase;

class JoinTest extends AbstractTestCase
{
    public function testCaseOne()
    {
        $collection=Collection::create(["twenty","one","pilots","one","two","eight","four"]);
        $this->assertEquals("twenty, one, pilots, one, two, eight, four",$collection->join(", "));
    }

    public function testCaseTwo()
    {
        $collection=Collection::create(["twenty","one","pilots","one","two","eight","four"]);
        $this->assertEquals("twenty,one,pilots,one,two,eight,four",$collection->join());
    }

    public function testCaseThree()
    {
        $collection=Collection::create(["twenty","one","pilots","one","two","eight","four"]);
        $this->assertEquals("twenty1one1pilots1one1two1eight1four",$collection->join("1"));
    }
}
