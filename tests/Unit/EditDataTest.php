<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class EditDataTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response =$this->json('get','edit/{id}',['name'=>'sally']);
       $this->assertTrue(true);

       $response 
       ->assertStatus(205);
       ->assertJson([
         'created'=>true
        ]);

    }
}
