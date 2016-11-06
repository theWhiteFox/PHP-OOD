<?php

require "Input.php";

class InputTest extends PHPUnit_Framework_TestCase
{
    public function testLoadFromGlobals()
    {
        $_GET['foo'] = 'Hello';

        $input = Input::createFromGlobals();

        $this->assertEquals($_GET['foo'], $input->get('foo'));
        $this->assertNull($input->get('bar'));
    }        
}