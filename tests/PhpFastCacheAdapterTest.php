<?php

namespace GraphStory\Cache\Test;

use GraphStory\Cache\PhpFastCacheAdapter;
use phpFastCache;

class PhpFastCacheAdapterTest extends \PHPUnit_Framework_TestCase
{
    protected $adapter;
    protected $mock;

    protected function setUp()
    {
        parent::setUp();

        $this->mock = $this->getMockBuilder('phpFastCache')
            ->disableOriginalConstructor()
            ->getMock();
        $this->adapter = new PhpFastCacheAdapter($this->mock);
    }

    protected function tearDown()
    {
        $this->adapter = null;

        parent::tearDown();
    }

    public function testSet()
    {
        $this->mock->expects($this->once())
            ->method('__call')
            ->with('set', ['testKey', 'testValue', null]);

        $this->adapter->set('testKey', 'testValue');
    }

    public function testGet()
    {
        $this->mock->expects($this->once())
            ->method('__call')
            ->with('get', ['testKey'])
            ->will($this->returnValue('testValue'));

        $actual = $this->adapter->get('testKey');

        $this->assertEquals('testValue', $actual);
    }
}
