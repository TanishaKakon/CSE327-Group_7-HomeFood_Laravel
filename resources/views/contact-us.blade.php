<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0"> 
	<title>Contact Us</title> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body> 

    <div class="container">
      <div class="row"> 
      	<div class="col-md-6 offset-md-3"> 
      		<div class="card"> 
      			<div class="card-header"><b>Contact Us</b>
                        <br>If you face any problem, please contact us. We are always ready to help you!!
                        </div> 

      			<div class="card-body">
      			<form method="POST" action="{{ route('contact.submit') }}" enctype="multipart/form-data">
      					@csrf 
      					<div class="form-group">
      						<label for="name">Name</label> 
      						<input type="text" name="name" class="form-control" required/>  
      					</div> 
      					<div class=".form-group">
      						
      						<label for="email">Email</label> 
      						<input type="email" name="email" class="form-control" required/> 
      					</div>
                        <div class=".form-group">
      						
      						<label for="phone">Phone</label> 
      						<input type="text" name="phone" class="form-control" required/>  
      					</div> 

      					<div class="form-group">
      						<label for="msg">Message</label> 
      						<textarea name="msg" class="form-control"></textarea>  
      					</div>   

                        <input type="submit" class="btn btn-primary float-right" value="Submit"/>






      				</form>
      			</div>

</body> 

<style>
      .container{
            background-image: url('{{ asset('/public/img/pic.jpg') }}');  
            padding-top: 70px;  
            background-color: #9F7F7F;
              
             }

         
</style>
</html>