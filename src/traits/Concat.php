<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:02 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Concat
 * @package Horat1us\Arrays\Traits
 */
trait Concat
{
    /**
     * @param array ...$values
     * @return static
     */
    public function concat(...$values)
    {
        array_map(function ($value) {
            return (array)$value;
        }, $values);
        return static::create(array_merge($this->container, ...$values));
    }
}