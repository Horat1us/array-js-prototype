<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:21 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class IndexOf
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait IndexOf
{
    /**
     * @param $searchElement
     * @param $fromIndex
     * @return bool
     */
    public function indexOf($searchElement, $fromIndex=0)
    {
        $fromIndex = $fromIndex !== null
            ? ($fromIndex < 0 ? max($this->count() + $fromIndex, 0) : $fromIndex)
            : null;

        foreach ($this->container as $index => $value) {
            if ($fromIndex && $index < $fromIndex) {
                continue;
            }
            if ($value === $searchElement) {
                return $index;
            }
        }
        return -1;
    }
}