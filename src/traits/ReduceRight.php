<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:57 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class ReduceRight
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait ReduceRight
{
    /**
     * @param \Closure $callback
     * @param mixed $initialValue
     * @return mixed
     */
    public function reduceRight(\Closure $callback, $initialValue = null)
    {
        foreach (array_reverse($this->container) as $index => $value) {
            $initialValue = $callback($initialValue, $value, $index, $this->container);
        }
        return $initialValue;
    }
}