<?php

namespace Dollyaswin\CliColor;

use Dollyaswin\CliColor\Text\Color as TextColor;
use Dollyaswin\CliColor\Background\Color as BgColor;

class Builder
{
    public static function getColoredString($string, $textColor, $bgColor = null)
    {
        $coloredString = "\033[" . $textColor . "m";
        
        if (!is_null($bgColor)) {
            $coloredString .= "\033[" . $bgColor . "m";
        }
        
        return $coloredString . $string . "\033[0m";
    }
}
