<?php

require 'SimpleSHM.php';

class SimpleSHMTest extends PHPUnit_Framework_TestCase
{    
    public function testIsCreatingNewBlock()
    {
        $memory = new SimpleSHM;
        $this->assertInstanceOf('SimpleSHM', $memory);
        
        $memory->write('Sample');
        $data = $memory->read();
        $this->assertEquals('Sample', $data);
    }
    
    public function testIsCreatingNewBlockWithId()
    {
        $memory = new SimpleSHM(897);
        $this->assertInstanceOf('SimpleSHM', $memory);
        $this->assertEquals(897, $memory->getId());
        
        $memory->write('Sample 2');
        $data = $memory->read();
        $this->assertEquals('Sample 2', $data);
    }
    
    public function testIsMarkingBlockForDeletion()
    {
        $memory = new SimpleSHM(897);
        $memory->delete();
        $data = $memory->read();
        $this->assertEquals('Sample 2', $data);
    }
}
