<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 12:12
 */

namespace Horat1us\Arrays\Tests;

use Every;
use Horat1us\Arrays\Collection;
use PHPUnit\Framework\TestCase;

class EveryTest extends AbstractTestCase
{
    public function testCase()
    {
        $collection=Collection::create([2,3,1]);
        $this->assertEquals(false,$collection->every(function ($match){
            return $match>=5;
        }));
    }
}
