<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IndexControllerTest extends TestCase
{
    /**
     * Haceder al home y revisra su contenido.
     * 
     * @return void
     */
    public function testGetHome()
    {
        $this->visit('/')
             ->see('Marz v1.1.0');
    }
}