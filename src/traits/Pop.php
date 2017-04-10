<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 10:51 PM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Pop
 * @package Horat1us\Arrays\Traits
 *
 * @mixin Collection
 */
trait Pop
{
    public function pop()
    {
        return array_pop($this->container);
    }
}