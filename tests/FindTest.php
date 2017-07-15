<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 10:27
 */

namespace Horat1us\Arrays\Tests;

use Find;
use Horat1us\Arrays\Collection;
use PHPUnit\Framework\TestCase;

class FindTest extends AbstractTestCase
{
    public function testCase()
    {
        $collection=Collection::create([1,2,3,4,5]);
        $this->assertEquals(3,$collection->find(function ($value){
            return $value>2 && $value<4;
        }));
    }
}
