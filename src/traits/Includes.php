<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:07 AM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Includes
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait Includes
{
    /**
     * @param $searchElement
     * @param int $fromIndex
     * @return bool
     */
    public function includes($searchElement, int $fromIndex = null): bool
    {
        $fromIndex = $fromIndex !== null
            ? ($fromIndex < 0 ? max($this->count() + $fromIndex, 0) : $fromIndex)
            : null;

        foreach ($this->container as $index => $value) {
            if ($fromIndex && $index < $fromIndex) {
                continue;
            }
            if ($value === $searchElement) {
                return true;
            }
        }
        return false;
    }
}