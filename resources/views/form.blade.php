<html>
<head>
 <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com
/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js">
 </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
 </script>

</head>
<body>

<div class="container">
<div class="panel panel-default"style="width:45%;margin-left:25%;margin-top:5%">
<div class="panel-body">
<center><h1> Sign Up</h1></center>
    <form  action="{{url('/')}}/Register"method="post">
        @csrf
   <div class="form-group" style="width:100%">
<label  for="text">Username</label>
<input type="text" name="text"class="form-control" placeholder="Enter username" ></div>

     <div class="form-group"style="width:100%">
<label  for="text">Email</label>
<input type="email" name="email"class="form-control"placeholder="Enter email" ></div>

<span class="text-danger">
 
</span>
 <div class="form-group" style="width:100%">
<label  for="text">Password</label>
<input type="password" name="password"class="form-control"placeholder="Enter password"></div>

<span class="text-danger">

</span>
 <div class="form-group" style="width:100%">
<label  for="text">Confirm Password</label>
<input type="password" name="password_confirmation"class="form-control"placeholder="Enter password again"></div>

<span class="text-danger">
    
</span>
 <div class="form-group" style="width:100%">
<button class="btn btn-primary">Submit</button>
</div>
</form>
</div></div></div>
