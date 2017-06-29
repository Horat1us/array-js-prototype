<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 15:33
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use ReduceRight;
use PHPUnit\Framework\TestCase;

class ReduceRightTest extends TestCase
{
    public function testCaseOne()
    {
        $collection=Collection::create([1,2,3,4,5]);
        $this->assertEquals(15,$collection->reduceRight(function ($previous_value,$current_value){
            return $current_value+$previous_value;
        }));
    }

    public function testCaseTwo()
    {
        $collection=Collection::create([1,2,3,4,5]);
        $this->assertEquals(3,$collection->reduceRight(function ($previous_value,$current_value){
            return $current_value-$previous_value;
        }));
    }
}
