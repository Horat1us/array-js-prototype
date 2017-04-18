<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:53 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Reduce
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Reduce
{
    /**
     * @param \Closure $callback
     * @param mixed $initialValue
     * @return mixed
     */
    public function reduce(\Closure $callback, $initialValue = null)
    {
        foreach ($this->container as $index => $value) {
            $initialValue = $callback($initialValue, $value, $index, $this->container);
        }
        return $initialValue;
    }
}