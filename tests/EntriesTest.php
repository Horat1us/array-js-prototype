<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 25.06.2017
 * Time: 0:59
 */

namespace Horat1us\Arrays\Tests;

use Entries;
use Horat1us\Arrays\Collection;
use PHPUnit\Framework\TestCase;

class EntriesTest extends AbstractTestCase
{
    public function testCaseInt()
    {
        $collection=Collection::create([2,3,1]);
        $this->assertEquals(Collection::create(["0, '2'","1, '3'","2, '1'"]),$collection->entries());
    }

    public function testCaseString()
    {
        $collection=Collection::create(["x"=>"one","two","three"]);
        $this->assertEquals(Collection::create(["x, 'one'","0, 'two'","1, 'three'"]),$collection->entries());
    }
}
