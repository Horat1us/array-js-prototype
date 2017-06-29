<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 13:14
 */

namespace Horat1us\Arrays\Tests;

use FindIndex;
use Horat1us\Arrays\Collection;
use PHPUnit\Framework\TestCase;

class FindIndexTest extends AbstractTestCase
{
    public function testCaseOne()
    {
        $collection=Collection::create([1,2,3,4,5]);
        $this->assertEquals(1,$collection->findIndex(function ($value){
            return $value==2;
        }));
    }

    public function testCaseTwo()
    {
        $collection=Collection::create([1,2,3,4,5]);
        $this->assertEquals(-1,$collection->findIndex(function ($value){
            return $value==7;
        }));
    }
}
