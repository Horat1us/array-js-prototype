<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 12:28
 */

namespace Horat1us\Arrays\Tests;

use Filter;
use function foo\func;
use Horat1us\Arrays\Collection;
use PHPUnit\Framework\TestCase;

class FilterTest extends AbstractTestCase
{
    public function testCase()
    {
        $collection=Collection::create([1,2,3,4,5]);
        $this->assertEquals($collection->create([1,2]),$collection->filter(function ($value){
            return $value<3;
        }));
    }
}
