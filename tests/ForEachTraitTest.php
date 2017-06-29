<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 23.06.2017
 * Time: 13:42
 */

namespace Horat1us\Arrays\Tests;

use function foo\func;
use ForEachTrait;
use Horat1us\Arrays\Collection;
use PHPUnit\Framework\TestCase;

class ForEachTraitTest extends AbstractTestCase
{
    public function testCaseOne()
    {
        $collection=Collection::create([10,22,31,67,26]);
        $collection->forEach(function ($value){
             $value=5;
        });
        $this->assertEquals(Collection::create([15,27,36,72,31]),$collection);
    }
}
