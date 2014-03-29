<?php

namespace Simple\SHM\Test;

use Simple\SHM\Block;

class BlockTest extends \PHPUnit_Framework_TestCase
{
    public function testIsCreatingNewBlock()
    {
        $memory = new Block;
        $this->assertInstanceOf('Simple\\SHM\\Block', $memory);

        $memory->write('Sample');
        $data = $memory->read();
        $this->assertEquals('Sample', $data);
    }

    public function testIsCreatingNewBlockWithId()
    {
        $memory = new Block(897);
        $this->assertInstanceOf('Simple\\SHM\\Block', $memory);
        $this->assertEquals(897, $memory->getId());

        $memory->write('Sample 2');
        $data = $memory->read();
        $this->assertEquals('Sample 2', $data);
    }

    public function testIsMarkingBlockForDeletion()
    {
        $memory = new Block(897);
        $memory->delete();
        $data = $memory->read();
        $this->assertEquals('Sample 2', $data);
    }
}
