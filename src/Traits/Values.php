<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:59 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Values
 * @package Horat1us\Arrays\Traits
 */
trait Values
{

    /**
     * @return static
     */
    public function values(): array
    {
        return static::create(array_values($this->container));
    }
}