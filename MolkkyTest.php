<?php

namespace Molkky;

use PHPUnit\Framework\TestCase;

class MolkkyTest extends TestCase
{
    public function testMolkky()
    {
        $molkky = new Molkky();
        $this->assertEquals(8, $molkky->getScore([
            [5, 4],
            [4],
            [6, 3],
        ]));      
        $this->assertEquals('WIN', $molkky->getScore([
            [10],
            [8, 2],
            [4, 3, 2, 5],
            [10],
            [12],
            [12],
        ]));        
        $this->assertEquals(25, $molkky->getScore([
            [10],
            [8, 2],
            [4, 3, 2, 5],
            [10],
            [12],
            [12],
            [8],
        ]));  
        $this->assertEquals('LOST', $molkky->getScore([
            [],
            [],
            [],
        ]));   
        $this->assertEquals('LOST', $molkky->getScore([
            [10],
            [],
            [],
            [],
        ]));   
    }
}
