<?php

namespace Core;

class TimerUtil
{
    /**
     * Get year number start from 2015
     * exp: 2015 -> 0
     *      2016 -> 1
     * @return int
     */
    public static function getEraYear() {
        return ((int) date('Y') - 2016);
    }

    /**
     * Get month number start from 2016
     * exp: 01/2016-> 001
     *      02/2017 -> 014 (2 + (2017-2016)*12)
     *
     * @return int|string
     */
    public static function getEraMonth() {
        $era = (int) date('m') + 12*self::getEraYear();
        if ($era < 10) {
            $era = '00'.$era;
        } else if ($era >= 10 && $era < 100) {
            $era = '0' .$era;
        }

        return $era;
    }
}