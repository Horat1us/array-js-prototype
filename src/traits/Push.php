<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 10:55 PM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Push
 * @package Horat1us\Arrays\Traits
 *
 * @mixin Collection
 */
trait Push
{
    /**
     * @param array ...$elements
     * @return int
     */
    public function push(...$elements)
    {
        return array_push($this->container, ...$elements);
    }
}