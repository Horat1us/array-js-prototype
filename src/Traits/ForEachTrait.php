<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:25 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class ForEachTrait
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait ForEachTrait
{

    /**
     * @param \Closure $callback
     * @param object $thisArg
     * @return void
     */
    public function forEach (\Closure $callback, object $thisArg = null)
    {
        if ($thisArg) {
            $callback->bindTo($thisArg);
        }

        array_walk($this->container, $callback, $this->container);

    }
}