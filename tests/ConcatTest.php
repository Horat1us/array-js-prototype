<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 11:03
 */

namespace Horat1us\Arrays\Tests;

use Concat;
use Horat1us\Arrays\Collection;
use PHPUnit\Framework\TestCase;

class ConcatTest extends AbstractTestCase
{
    public function testCase()
    {
        $collection=Collection::create([1,2]);
        $this->assertCollectionEqual( $collection->concat([3,5]),[1,2,3,5]);
    }
}
