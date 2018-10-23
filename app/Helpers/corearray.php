<?php
/**
 * Created by PhpStorm.
 * User: rana
 * Date: 10/22/18
 * Time: 3:30 PM
 */


if (!function_exists('payment_option')) {
    function payment_option($key = null)
    {
        $options = [
            1 => 'Pay In Full',
            2 => 'Pay Monthly'
        ];

        return is_null($key) ? $options : (isset($options[$key]) ? $options[$key] : null);
    }
}

if (!function_exists('marital_status')) {
    function marital_status($key = null)
    {
        $options = [
            1 => 'Single',
            2 => 'Married'
        ];

        return is_null($key) ? $options : (isset($options[$key]) ? $options[$key] : null);
    }
}

if (!function_exists('lead_status')) {
    function lead_status($key = null)
    {
        $options = [
            1 => 'Assigned',
            2 => 'Contacted',
            3 => 'Contact Issue',
            4 => 'Closed',
            5 => 'NG Own Carrier',
            6 => 'NG Allstate',
            7 => 'NG Other'

        ];

        return is_null($key) ? $options : (isset($options[$key]) ? $options[$key] : 'Unassigned');
    }
}

if (!function_exists('gift_card_status')) {
    function gift_card_status($key = null)
    {
        $options = [
            1 => 'Pending',
            2 => 'Sent / GB',
            3 => 'Sent / Direct',
            4 => 'NGL',
        ];

        return is_null($key) ? $options : (isset($options[$key]) ? $options[$key] : null);
    }
}

if (!function_exists('status')) {
    function status($key = null)
    {
        $options = [
            1 => 'Active',
            0 => 'Paused',
        ];

        return is_null($key) ? $options : (isset($options[$key]) ? $options[$key] : null);
    }
}