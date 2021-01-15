<?php



use Illuminate\Database\Seeder; 
use Illuminate\Support\facades\DB; 
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [

                'id' =>  "1",
                'name'=> "Nisha",
                'email' => "farhana23@gmail.com",
                'email_verified_at' =>"",
                'password'=> "$2y$10$.ZjsYXkW/rYP1S6clu9wtOTbg8XR6yxZTH46DKsnZ.LKls4IWLGU." ,        
                'remember_token'=>"NULL"
       
            ],
            [ 


                'id' => "2" ,
                'name'=> "Adiba Nahar",
                'email' =>"nazmunadiba28@gmail.com",
                'email_verified_at' =>"",
                'password'=> "$2y$10$UEz1u6Qr6dVO0m6z.uqs.uWKme3BL4lcImJS1UrOI0RO7r.9CR5aK",         
                'remember_token'=>""
                
            ],
           

           [ 
                 'id' => "3" ,
                'name'=> "Nazmun",
                'email' =>"nazmun.nahar01@northsouth.edu",
                'email_verified_at' =>"",
                'password'=> "$2y$10$f6Q15NA54aqZ5NFz0F6SreYKJT8P9iBB8nHAJw0R0FDSLXWEVYDXm",         
                'remember_token'=>""
                
            ],
          
            [ 
               'id' => "4" ,
                'name'=> "Shaon",
                'email' =>"arif.shaon@gmail.com",
                'email_verified_at' =>"",
                'password'=> "$2y$10$f6Q15NA54aqZ5NFz0F6SreYKJT8P9iBB8nHAJw0R0FDSLXWEVYDXm",         
                'remember_token'=>""
                
            ], 


             [

                'id' => "5", 
                'name'=> "Home Food",
                'email' =>"home.food@gmail.com",
                'email_verified_at' =>"",
                'password'=> "$2y$10$/GA4g2pj4dNShFpJliJIp.nmrTTQG.xKnwtWW5WdMfyJloVZG1HIG" ,        
                'remember_token'=>""
       
            ],
            [ 


              'id' => "6", 
                'name'=> "Farhana Nisha",
                'email' =>"farhana.nisha@gmail.com",
                'email_verified_at' => "" ,            
                 'password'=> "$2y$10$KPvbmvZyLO3fxInP7nGbsuVwGkTOIJh4PRUYTx78GvKNJX/Wonsti",         
                'remember_token'=>""
                
            ],
           

           [ 
                 'id' => "7", 
                'name'=> "Tanha",
                'email' =>"tanha01@gmail.com",
                'email_verified_at' =>"",
                'password'=> "$2y$10$3IDE/cn3/rLkYs0mwQqyledXfdlRiX29wGagaJ2uAtyLJM7ZbM9hC",         
                'remember_token'=>""
                
            ],
          
            [ 
               'id' => "8", 
                'name'=> "asdfg",
                'email' =>"asdfg@gmaail.com",
                'email_verified_at' =>"",
                'password'=> "$2y$10$IXK61l/t6YUlHW57h6GtM.UV3SOQ5X82hT.UDJP70Q0OwezkQB1L2",         
                'remember_token'=>""
                
            ],
           
        ]);
    }
}
