<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:17 PM
 */

namespace Horat1us\Arrays\Tests;


use Horat1us\Arrays\Collection;

class SortTest extends AbstractTestCase
{
    public function testStringArray()
    {
        $collection = Collection::create(['Голубая', 'Горбатая', 'Белуга',])->sort();
        $this->assertCollectionEqual($collection, ['Белуга', 'Голубая', 'Горбатая']);
    }

    public function testNumberArray()
    {
        $collection = Collection::create([40, 1, 5, 200]);
        $this->assertCollectionEqual($collection->sort(), [1, 200, 40, 5]);

        $this->assertCollectionEqual($collection->sort([$this, 'compareNumbers']), [1, 5, 40, 200]);
    }

    public function testNumericStringArray()
    {
        $collection = Collection::create(['80', '9', '700']);
        $this->assertCollectionEqual($collection->sort(), ['700', '80', '9']);
        $this->assertCollectionEqual($collection->sort([$this, 'compareNumbers']), ['9', '80', '700']);
    }

    public function testMixedNumericArray()
    {
        $collection = Collection::create(['80', '9', '700', 40, 1, 5, 200]);
        $this->assertCollectionEqual($collection->sort(), [1, 200, 40, 5, '700', '80', '9']);
        $this->assertCollectionEqual($collection->sort([$this, 'compareNumbers']), [1, 5, '9', 40, '80', 200, '700']);
    }

    public function compareNumbers($a, $b)
    {
        return $a - $b;
    }
}