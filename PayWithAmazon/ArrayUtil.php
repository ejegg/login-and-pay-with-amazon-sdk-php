<?php

namespace PayWithAmazon;

class ArrayUtil
{
    public static function trimArray($array)
    {
        foreach ($array as $key => $value)
        {
            if(!is_null($value) && !is_array($value) && $key!=='proxy_password')
            {
                $array[$key] = trim($value);
            }
        }
        return $array;
    }
}
