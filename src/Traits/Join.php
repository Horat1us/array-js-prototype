<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:13 AM
 */

namespace Horat1us\Arrays\Traits;


/**
 * Class Join
 * @package Horat1us\Arrays\Traits
 */
trait Join
{
    /**
     * @param string $separator
     * @return string
     */
    public function join(string $separator = ','): string
    {
        return implode($separator, $this->container);
    }
}