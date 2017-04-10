<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:48 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Keys
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Keys
{
    /**
     * @return int[]|string[]
     */
    public function keys() :array
    {
        return array_keys($this->container);
    }
}