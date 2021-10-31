<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    /**@test**/
    public function testDatabase()
    {
        
        $this->assertDatabaseHas('users',[
         'email'=>"nazmunadiba28@gmail.com"
     ]); 
         
    } 


    }
    
    

    







