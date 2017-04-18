<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 11:09 PM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Sort
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Sort
{

    /**
     * @param callable $compareFunc
     * @return static
     */
    public function sort($compareFunc = null)
    {
        if (!$compareFunc) {
            sort($this->container, SORT_LOCALE_STRING);
        } else {
            usort($this->container, $compareFunc);
        }

        return $this;
    }
}