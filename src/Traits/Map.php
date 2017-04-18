<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:49 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Map
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Map
{
    /**
     * @param \Closure $callback
     * @param object|null $thisArg
     * @return static
     */
    public function map(\Closure $callback, object $thisArg = null)
    {
        $callback->bindTo($thisArg);
        $array = $this->container;
        array_walk($array, function (&$value, $index) use ($callback) {
            $value = $callback($value, $index, $this->container);
        });
        return static::create($array);
    }
}