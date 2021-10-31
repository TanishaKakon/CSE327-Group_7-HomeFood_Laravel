
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /**@test**/
    public function testDatabase()
    {
        
        $this->assertDatabaseHas('users',[
         'email'=>"nazmunadiba28@gmail.com"
     ]); 
         
    } 
}

<?php






    


    
    
    

    







>>>>>>> main
