<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once(dirname(__FILE__).'/../function.php');

class FunctionTest extends TestCase
{
    public function testMorning()
    {
        $day = 'morning';
        $this->assertSame(hello($day), 'good morning!');
    }

    public function testEvening()
    {
        $day = 'evening';
        $this->assertSame(hello($day), 'good evening!');
    }

    public function testHello()
    {
        $day = 'evening';
        $this->assertSame(hello($day), 'hello!');
    }
}