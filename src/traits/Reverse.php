<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:00 PM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Reverse
 * @package Horat1us\Arrays\Traits
 *
 * @mixin Collection
 */
trait Reverse
{
    /**
     * @return static
     */
    public function reverse()
    {
        $this->container = array_reverse($this->container);
        return $this;
    }
}