<?php

namespace App\Helpers;

class StringHelper
{
    public static function maskName($name)
    {
        $length = strlen($name);
        if ($length <= 2) {
            return str_repeat('*', $length);
        }
        $visibleChars = 2;
        $maskedLength = $length - $visibleChars;
        return substr($name, 0, $visibleChars) . str_repeat('*', $maskedLength);
    }
}
