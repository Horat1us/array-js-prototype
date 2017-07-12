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

        if($this->container)
        {
            $i=0;
            foreach ($this->container as $item)
            {
                $result[$i]="".$keys[$i].", '".$item."'";
                $i++;
            }
        }


        return Collection::create($result);
    }
}