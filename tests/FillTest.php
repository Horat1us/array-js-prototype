<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 10:35 PM
 */

namespace Horat1us\Arrays\Tests;


use Horat1us\Arrays\Collection;

class FillTest extends AbstractTestCase
{
    public function testCases()
    {
        $expects = [
            [[4], [4, 4, 4]],
            [[4, 1], [1, 4, 4]],
            [[4, 1, 2], [1, 4, 3]],
            [[4, 1, 1], [1, 2, 3]],
            [[4, -3, -2], [4, 2, 3]],
            [[4, null, null], [1, 2, 3]],
        ];

        foreach ($expects as $step => $value) {
            list($args, $expected) = $value;
            $collection = Collection::create([1, 2, 3])->fill(...$args);
            $this->assertCollectionEqual($collection, $expected);
        }
    }
}