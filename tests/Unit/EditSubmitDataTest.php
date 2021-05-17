<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class EditSubmitDataTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response =$this->json('get','edit_submit/{id}',['name'=>'sallay']);
        $this->assertTrue(true);
 
        $response 
        ->assertStatus(206);
        ->assertJson([
          'created'=>true
         ]);
    }
}
