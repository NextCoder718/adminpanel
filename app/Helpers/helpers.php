<?php
/**
 * Created by PhpStorm.
 * User: rana
 * Date: 10/22/18
 * Time: 4:10 PM
 */

if (!function_exists('array_to_string')) {
    function array_to_string($array, $separator = ',', $key = true, $is_seperator_at_ends = false)
    {
        if ($key == true) {
            $output = implode($separator, array_keys($array));
        } else {
            $output = implode($separator, array_values($array));
        }
        return $is_seperator_at_ends ? $separator . $output . $separator : $output;
    }
}