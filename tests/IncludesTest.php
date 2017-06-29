<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 14:27
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use Includes;
use PHPUnit\Framework\TestCase;

class IncludesTest extends AbstractTestCase
{
    public function testCaseOne()
    {
        $collection=Collection::create([4,12,3,5,77]);
        $this->assertEquals(true,$collection->includes(77));
    }

    public function testCaseTwo()
    {
        $collection=Collection::create([99,66,3,88,74]);
        $this->assertEquals(false,$collection->includes(77));
    }
}
