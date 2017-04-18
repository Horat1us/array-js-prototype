<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:15 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Slice
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Slice
{
    /**
     * @param int $begin
     * @param null $end
     * @param bool $preserveKeys
     * @return static
     */
    public function slice($begin = 0, $end = null, bool $preserveKeys = true)
    {
        return static::create(array_slice($this->container, $begin, $end, $preserveKeys));
    }
}