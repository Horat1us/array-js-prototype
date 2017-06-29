<?php
/**
 * Created by PhpStorm.
 * User: horat1us
 * Date: 4/11/17
 * Time: 12:02 AM
 */

namespace Horat1us\Arrays\Traits;


use foo\bar;
use Horat1us\Arrays\Collection;
use Horat1us\Arrays\Traits\Keys;

/**
 * Class Entries
 * @package Horat1us\Arrays\Traits
 */
trait Entries
{
    /**
     * @param array ...$values
     * @return Collection
     */
    public function entries()
    {
        $keys=$this->keys();

        $result=[];

        for($i=0;$i<$this->container->length;$i++)
        {
            $result[$i]="".$keys[$i].", ".$this->container[$i];
        }

        return Collection::create($result);
    }
}