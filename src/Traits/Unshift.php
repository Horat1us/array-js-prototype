<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:49 PM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Unshift
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Unshift
{
    /**
     * @param array ...$elements
     * @return int
     */
    public function unshift(...$elements)
    {
        return array_unshift($this->container, ...$elements);
    }
}