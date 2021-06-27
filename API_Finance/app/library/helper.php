<?php

namespace App\Library;

class helper
{

    public static function get_string_between($string, $start, $end)
    {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    public static function Array2String($Array)
    {
        if (!$Array) {
            return false;
        }
        $Return = '';
        $NullValue = "^^^";
        foreach ($Array as $Key => $Value) {
            if (is_array($Value)) {
                $ReturnValue = '^^array^' . Array2String($Value);
            } else {
                $ReturnValue = strlen($Value) > 0 ? $Value : $NullValue;
            }
            $Return .= urlencode(base64_encode($Key)) . '|' . urlencode(base64_encode($ReturnValue)) . '||';
        }
        return urlencode(substr($Return, 0, -2));
    }
}
