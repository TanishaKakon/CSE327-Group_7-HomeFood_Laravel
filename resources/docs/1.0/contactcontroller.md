#Code Documentaion

----

 - [Contact](#section-1)
 - [Function](#section-2)



---
 <a name="section-1"></a>  
 ##Contact
---


<larecipe-badge type="success" rounded>  
Use, Import,Required
</larecipe-badge>
---


```

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Mail; 
``` 

--- 

<a name="section-2"></a>  
 ##Function


<larecipe-badge type="success" rounded>  
contact function
</larecipe-badge>
---

```
 public function contact() 
    {
    	return view('contact-us');
    }

```  

--- 

<larecipe-badge type="success" rounded>  
contact function
</larecipe-badge>
---

```
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
```

---- 

<larecipe-badge type="success" rounded>  
Return
</larecipe-badge>
---

``` 
return "Message has been sent successfully";
``` 

---




