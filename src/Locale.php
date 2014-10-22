<?php

class Locale
{

    public static function getDefault()
    {
        return 'en-US';
    }
    public static function parseLocale($locale)
    {
        return array('language' => 'en', 'region' => 'US');
    }

}
