<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:36 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Some
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Some
{
    /**
     * @param \Closure $callback
     * @param object|null $thisArg
     * @return bool
     */
    public function some(\Closure $callback, object $thisArg = null): bool
    {
        if ($thisArg) {
            $callback->bindTo($thisArg);
        }
        foreach ($this->container as $index => $value) {
            if ($callback($value, $index, $this->container)) {
                return true;
            }
        }
        return false;
    }
}