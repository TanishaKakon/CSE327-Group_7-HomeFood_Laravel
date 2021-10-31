<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Food Deliver project</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	{{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
	
</body>
<style>
	
	img.slider-img{
		height: 400px !important;
	}
	.custom-food{
		height: 600px
	}
	.slider-text{
		background-color: #35443585 !important;
	}
	.menu-image{
		height: 120px;
		width: 170px;
	}
	.menu-item{
		float: left;
		width: 20%;
	}
	.menu-wrapper{
		margin: 30px;
	}
    .detail-img{
    	height: 300px;
    }
    .search-box{
    	width: 500px !important;
    }

	.cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
	.review{
    display: inline-block;
    margin-top: 8px;
	margin-bottom: -2px;
	margin-right: 2px;
	font-size: 13px;
    color: yellow;
    line-height: 20px;
}

.form-review{
        position: relative;
        bottom:80px;
        left: 430px;
        width: 200px;
    }
    
    .button {
      background-color: #008CBA;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 4px;
      position: relative; 
      left: 40px;
        }
    .button {
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
    }
    
    .button:hover {
      background-color: #6574cd; /* Green */
      color: white;
    }
    


</style>
</html>