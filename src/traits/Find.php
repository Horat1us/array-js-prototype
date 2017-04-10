<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:45 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Find
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Find
{

    /**
     * @param \Closure $callback
     * @param object|null $thisArg
     * @return mixed|null
     */
    public function find(\Closure $callback, object $thisArg = null): bool
    {
        foreach ($this->container as $index => $value) {
            if ($callback($value, $index, $this->container)) {
                return $value;
            }
        }
        return null;
    }
}