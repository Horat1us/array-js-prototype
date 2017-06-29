<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 15:35
 */

namespace Horat1us\Arrays\Tests;

use Horat1us\Arrays\Collection;
use Slice;
use PHPUnit\Framework\TestCase;

class SliceTest extends AbstractTestCase
{
    public function testCaseOne()
    {
        $collection=Collection::create([1,2,3,4,5]);

        $expected=[2=>3,3=>4,4=>5];
        $actual=$collection->slice(2);

        $this->assertEquals(Collection::create($expected)->count(),$actual->count());
        $this->assertCollectionEqual($actual,$expected);
    }

    public function testCaseTwo()
    {
        $collection=Collection::create([1,2,3,4,5]);

        $expected=[4=>5,3=>4,2=>3];
        $actual=$collection->slice(-3);

        $this->assertEquals(Collection::create($expected)->count(),$actual->count());
        $this->assertCollectionEqual($actual,$expected);
    }

    public function testCaseThree()
    {
        $collection=Collection::create([1,2,3,4,5]);

        $expected=[1=>2,2=>3,3=>4];
        $actual=$collection->slice(1,3);

        $this->assertEquals(Collection::create($expected)->count(),$actual->count());
        $this->assertCollectionEqual($actual,$expected);
    }

    public function testCaseFour()
    {
        $collection=Collection::create([1,2,3,4,5]);

        $expected=[2=>3,3=>4,4=>5];
        $actual=$collection->slice(-3,3);

        $this->assertEquals(Collection::create($expected)->count(),$actual->count());
        $this->assertCollectionEqual($actual,$expected);
    }
}
