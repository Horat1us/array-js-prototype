<?php

namespace Horat1us\Arrays\Traits;


use Horat1us\Arrays\Collection;

/**
 * Trait CopyWithin
 * @package Horat1us\Arrays\Traits
 *
 *
 */
trait CopyWithin
{
    /**
     * @see https://developer.mozilla.org/docs/Web/JavaScript/Reference/Global_Objects/Array/copyWithin
     * @param int $target
     * @param int $start
     * @param int|null $end
     * @return Collection
     */
    public function copyWithin(int $target, int $start, int $end = null): Collection
    {
        $o = $this->container;
        $len = count($o);
        $relativeTarget = $target;

        $to = $relativeTarget < 0
            ? max($len + $relativeTarget, 0)
            : min($relativeTarget, $len);

        $relativeStart = $start;
        $from = $relativeStart < 0
            ? max($len + $relativeStart, 0)
            : min($relativeStart, $len);

        $relativeEnd = $end ?? $len;
        $final = $relativeEnd < 0
            ? max($len + $relativeEnd, 0)
            : min($relativeEnd, $len);

        $count = min($final - $from, $len - $to);

        $direction = 1;
        if ($from < $to && $to < ($from + $count)) {
            $direction = -1;
            $from += $count - 1;
            $to += $count - 1;
        }

        while ($count-- > 0) {
            if (array_key_exists($from, $o)) {
                $o[$to] = $o[$from];
            } else {
                unset($o[$to]);
            }

            $from += $direction;
            $to += $direction;
        }

        $this->container = $o;
        return $this;
    }
}