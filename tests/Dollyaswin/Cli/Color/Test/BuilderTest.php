<?php

/**
 * @package Dollyaswin
 */

namespace Dollyaswin\Cli\Color\Test;

use PHPUnit_Framework_TestCase;
use Dollyaswin\Cli\Color\Builder as ColorBuilder;
use Dollyaswin\Cli\Color\Text\Color as TextColor;
use Dollyaswin\Cli\Color\Background\Color as BgColor;

/**
 *
 * @author  Dolly Aswin <dolly.aswin@gmail.com>
 */
class BuilderTest extends PHPUnit_Framework_TestCase
{
    protected $builder;
    
    public function setUp()
    {
    }
    
    public function tearDown()
    {
    }
    
    /**
     * Test ColorBuilder text coloring
     */
    public function testTextColoring()
    {
        $text = 'Testing';
        
        // compose expected output
        $expectedOutput = "\033[" . TextColor::CYAN . "m" . $text . "\033[0m";
        
        $this->assertEquals($expectedOutput, ColorBuilder::getColoredString($text, TextColor::CYAN));
    }
    
    /**
     * Test ColorBuilder 
     */
    public function testTextColoringWithBackground()
    {
        $text = 'Testing';
        
        // compose expected output
        $textColoring = "\033[" . TextColor::LIGHT_GRAY . "m";
        $bgColoring   = "\033[" . BgColor::MAGENTA . "m";
        $expectedOutput = $textColoring . $bgColoring  . $text . "\033[0m";
        
        $this->assertEquals($expectedOutput, ColorBuilder::getColoredString($text, TextColor::LIGHT_GRAY, BgColor::MAGENTA));
    }
}
