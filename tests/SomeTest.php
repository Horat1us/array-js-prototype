<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 24.06.2017
 * Time: 23:59
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use Some;
use PHPUnit\Framework\TestCase;

class SomeTest extends AbstractTestCase
{

    public function testCaseOne()
    {
        $collection=Collection::create([2,3,1]);
        $this->assertEquals(false,$collection->some(function ($match){
            return $match>=5;
        }));
    }

    public function testCaseTwo()
    {
        $collection=Collection::create([2,3,1]);
        $this->assertEquals(true,$collection->some(function ($match){
            return $match<=5&&$match>=2;
        }));
    }

}
