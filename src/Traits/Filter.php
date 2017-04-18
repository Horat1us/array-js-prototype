<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:41 AM
 */

namespace Horat1us\Arrays\Traits;

use Horat1us\Arrays\Collection;


/**
 * Class Filter
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Filter
{
    /**
     * @param \Closure $callback
     * @param object|null $thisArg
     * @return static
     */
    public function filter(\Closure $callback, object $thisArg = null)
    {
        $callback->bindTo($thisArg);

        $array = [];
        foreach ($this->container as $index => $value) {
            if (!$callback($value, $index, $this->container)) {
                continue;
            }
            $array[$index] = $value;
        }
        return static::create($array);
    }
}