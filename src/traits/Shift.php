<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:03 PM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Shift
 * @package Horat1us\Arrays\Traits
 *
 * @mixin Collection
 */
trait Shift
{

    public function shift()
    {
        return array_shift($this->container);
    }
}