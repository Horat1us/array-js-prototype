<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 15:19
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use Reduce;
use PHPUnit\Framework\TestCase;

class ReduceTest extends TestCase
{
    public function testCaseOne()
    {
        $collection=Collection::create([1,2,3,4,5]);
        $this->assertEquals(15,$collection->reduce(function ($previous_value,$current_value){
           return $current_value+$previous_value;
        }));
    }

    public function testCaseTwo()
    {
        $collection=Collection::create([1,2,3,4,5]);
        $this->assertEquals(3,$collection->reduce(function ($previous_value,$current_value){
            return $current_value-$previous_value;
        }));
    }
}
