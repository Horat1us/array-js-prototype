<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:38 PM
 */

namespace Horat1us\Arrays\Tests;


use Horat1us\Arrays\Collection;

/**
 * Class SpliceTest
 * @package Horat1us\Arrays\Tests
 */
class SpliceTest extends AbstractTestCase
{
    public function testCase()
    {
        $collection = Collection::create(['angel', 'trump', 'orange', 'doctor']);

        $removed = $collection->splice(2, 0, 'putin');
        $this->assertCollectionEqual($collection, ['angel', 'trump', 'putin', 'orange', 'doctor',]);
        $this->assertCollectionEqual($removed, []);

        $removed = $collection->splice(3, 1);
        $this->assertCollectionEqual($collection, ['angel', 'trump', 'putin', 'doctor',]);
        $this->assertCollectionEqual($removed, ['orange']);

        $removed = $collection->splice(2, 1, 'scope');
        $this->assertCollectionEqual($collection, ['angel', 'trump', 'scope', 'doctor']);
        $this->assertCollectionEqual($removed, ['putin']);

        $removed = $collection->splice(0, 2, 'parrot', 'vivaldi', 'chrome');
        $this->assertCollectionEqual($removed, ['angel', 'trump']);
        $this->assertCollectionEqual($collection, ['parrot', 'vivaldi', 'chrome', 'scope', 'doctor',]);

        $removed = $collection->splice(3, 100);
        $this->assertCollectionEqual($collection, ['parrot', 'vivaldi', 'chrome',]);
        $this->assertCollectionEqual($removed, ['scope', 'doctor',]);
    }
}