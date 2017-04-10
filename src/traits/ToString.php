<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:19 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class ToString
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait ToString
{
    /**
     * @return string
     */
    public function toString() :string
    {
        return (string)$this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->join();
    }
}