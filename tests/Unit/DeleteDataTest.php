<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class DeleteDataTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response =$this->json('get','delete/{id}',['name'=>'sally']);
       $this->assertTrue(true);

       $response 
       ->assertStatus(202);
       ->assertJson([
         'created'=>true
        ]);

    }
}
