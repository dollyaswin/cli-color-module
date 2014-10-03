<?php

use Dollyaswin\Cli\Color\Builder;
use Dollyaswin\Cli\Color\Background\Color as BgColor;
use Dollyaswin\Cli\Color\Text\Color as TextColor;

$loader = require_once __DIR__ . '/../vendor/autoload.php';

if (!isset($loader)) {
    throw new RuntimeException('vendor/autoload.php could not be found. Did you run `php composer.phar install`?');
}

$loader->add('Dollyaswin\Cli\Color', __DIR__);

$builder = new Builder();
$string  = '  Just testing just testing  ';
echo $builder::getColoredString($string, TextColor::WHITE, BgColor::RED), PHP_EOL;
echo $builder::getColoredString($string, TextColor::CYAN, BgColor::YELLOW), PHP_EOL;
