<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script src="text/javascript">
$(document).ready(function(){
    $('#btn').click(function(){
        var email=$('#email').val();
        var password=$('#password').val();
        $.post("./login.php",{
            email:email,
            password:password,
        },
        function(data,status){
            if(data==success)
            {
                $('#response').html("<div class='alert alert-success>"+data+"</div>");
            }else{
                $('#response').html("<div class='alert alert-warning>"+data+"</div>");
            }
        });
    });
});
</script>
<body>
   
    <div class="container">
        <h1>Login here</h1>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="Password" class="form-control" id="password" name="password" required/><br>
                    <input type="submit" class="btn  row col-md-offset-3 btn-primary" value="Login" name="submit" id="btn" >        
    </div>
    <div id=response></div>
</body>
</html>

