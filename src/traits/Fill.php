<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/10/17
 * Time: 10:50 PM
 */

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Class Fill
 * @package Horat1us\Arrays\Traits
 *
 * @mixin Collection
 */
trait Fill
{
    /**
     * @param $value
     * @param int $start
     * @param int|null $end
     * @return Collection
     */
    public function fill($value, $start = 0, int $end = null)
    {
        if ($start === $end) {
            return static::create($this->container);
        }

        $len = count($this->container);
        $end = $end ?? $len;
        $relativeStart = $start < 0
            ? max($len + $start, 0)
            : min($start, $len);

        $relativeEnd = $end < 0
            ? max($len + $end, 0)
            : min($len, $end);

        if ($relativeStart > $relativeEnd) {
            list($relativeStart, $relativeEnd) = [$relativeEnd, $relativeStart];
        }

        $this->container = array_fill(
                $relativeStart,
                $relativeEnd - $relativeStart, $value)
            + $this->container;
        return $this;
    }
}