<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 15:08
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use Map;
use PHPUnit\Framework\TestCase;

class MapTest extends TestCase
{
    public function testCase()
    {
        $collection=Collection::create([9,22,8,14,88]);
        $this->assertEquals(Collection::create([14,27,13,19,93]),$collection->map(function ($value){
            return $value+=5;
        }));
    }
}
