<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_CURD_OPERATIONS</title>
    <link rel="icon" href="best.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</head>
<body>
 <style>

    body{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
   
    
}
.register{
    justify-content: center;
    align-items: center;
    display: flex;
    margin-top:30px ;
    cursor: pointer;

    }
.register li{
    list-style-type: none;
    display: flex;
}
.register .left{
    margin-right: 20px;

}
.heading{
    text-align: center;
}
.marq {
    border: none;
    color: red;
    padding-top: 30px;
    padding-bottom: 30px;
        }
</style>
<div class="heading">
    <h3 class="text-dark">Welcome to My website</h3>
</div>
<marquee class="marq h-2" 
                 direction="left" loop="infinite">
            
            <div class="text-danger">
           BASIC_CURD OPERATIONS:->  Click to the  Below Login button and Sign button We Can Access from the Application
            </div>
        </marquee>
<div class="register d-flex ">
<div class="left">
<li class=" list-unstyled "><a class="btn btn-primary" href="login.php">Login</a></li>
</div>
 <div class="right ">
    <li class=" list-unstyled "><a class="btn btn-primary" href="signup.php">Sign Up</a></li>
 </div>
</div>
</body>
</html>
