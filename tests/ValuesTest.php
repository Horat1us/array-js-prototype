<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 25.06.2017
 * Time: 0:23
 */

namespace Horat1us\Arrays\Traits;

use Horat1us\Arrays\Collection;
use Values;
use PHPUnit\Framework\TestCase;

class ValuesTest extends TestCase
{
    public function testCase()
    {
        $collection=Collection::create(["one"=>"one","two"=>14,"three"=>"two"]);
        $this->assertEquals(["one",14,"two"],$collection->values());
    }
}
