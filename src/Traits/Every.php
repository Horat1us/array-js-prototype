<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:32 AM
 */

namespace Horat1us\Arrays\Traits;


/**
 * Class Every
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Every
{
    /**
     * @param \Closure $callback
     * @param object|null $thisArg
     * @return bool
     */
    public function every(\Closure $callback, object $thisArg = null): bool
    {
        if ($thisArg) {
            $callback->bindTo($thisArg);
        }

        foreach ($this->container as $index => $value) {
            if(!$callback($value, $index, $this->container)) {
                return false;
            }
        }
        return true;
    }
}