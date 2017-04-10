<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:35 PM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Splice
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Splice
{
    /**
     * @param int $start
     * @param int $deleteCount
     * @param array ...$items
     * @return $this
     */
    public function splice(int $start, int $deleteCount = 0, ...$items)
    {
        return static::create(array_splice($this->container, $start, $deleteCount, $items));
    }
}