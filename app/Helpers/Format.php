<?php

namespace App\Helpers;

class Format
{
    static function rupiahFront($value)
    {
        $length = strlen($value);
        // dd($value);
        if ($length == 6) {
            $val = substr($value, 0, 3);

            // dd($value);
            // $value = substr($value, 0, -6) . '.' . substr($value, -6, 3) . '.' . substr($value, -3);
            return $val;
        } else if ($length == 7) {
            $val = substr($value, 0, 4);

            return $val;
        }
        // return $value;
    }
}
