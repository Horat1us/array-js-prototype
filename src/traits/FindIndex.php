<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:47 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class FindIndex
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait FindIndex
{
    /**
     * @param \Closure $callback
     * @param object|null $thisArg
     * @return mixed|null
     */
    public function findIndex(\Closure $callback, object $thisArg = null): bool
    {
        foreach ($this->container as $index => $value) {
            if ($callback($value, $index, $this->container)) {
                return $index;
            }
        }
        return null;
    }
}