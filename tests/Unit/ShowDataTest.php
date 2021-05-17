<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ShowDataTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response =$this->json('get','/');
       $this->assertTrue(true);

       $response 
       ->assertStatus(201);
       ->assertJson([
         'created'=>true
        ]);


    }
}
