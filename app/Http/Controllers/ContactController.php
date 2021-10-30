<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Mail;

class ContactController extends Controller
{
    public function contact() 
    {
    	return view('contact-us');
    } 
    public function contactSubmit(Request $request){
    	Mail::send('emails.contactmail', [
            'name' => $request ->name, 
            'email' => $request ->email,  
            'phone' => $request ->phone,  
            'msg' => $request ->msg,  
        ],function($mail) use ($request){ 
        	$mail->from(env('MAIL_FROM_ADDRESS'),$request->name); 
            $mail->to("foodhome54@gmail.com")->subject('Contact Us Message'); 
            		

        }

); 
    	return "Message has been sent successfully";
    	

    }
}
