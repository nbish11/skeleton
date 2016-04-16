<?php

namespace nbish11\Skeleton;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    private $skeleton;

    public function setUp()
    {
        $this->skeleton = new Example();
    }

    public function testReturnsPhrase()
    {
        $this->assertEquals('test', $this->skeleton->echoPhrase('test'));
    }

    /**
     * Test that true does in fact equal true
     */
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }
}
