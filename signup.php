<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>

<style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}

form{
    
    margin-top: 50px;
    height: 550px;
    width: 450px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    margin-top: -30px;
    font-size: 28px;
    font-weight: bold;
    line-height: 2px;
    text-align: center;
}

label{
    display: block;
    margin-top: 10px;
    font-size: 16px;
    font-weight: bold;
}
input{
    display: block;
    height: 10%;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 15px;
    padding: 0 10px;
    margin-top: 3px;
    font-size: 14px;
   
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 10px;
    height: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    font-size: 24px;
    font-weight: bold;
    border-radius: 30px;
    cursor: pointer;
}
button:hover{
    background-color: #48c2be;
}
.para{
    display: flex;
    margin-top:15px ;
}
.para p{
    font-weight: bold;
    margin-left: 30px;
}
.para a{
    font-size: 20px;
    font-weight: bold;
    margin: -3px;
    cursor: pointer;
    margin-left: 20px;
    text-decoration: none;
}
.berror{
    margin-top: 30px;
 
}
.bsuccess{
    margin-top: 30px;
}
    </style> 
    <?php
         if(isset($_GET['error'])){ ?>
            <b class="berror" style="color: red;"><?=$_GET['error']?></b><br>
    <?php } ?>
    <?php
         if(isset($_GET['success'])){ ?>
            <b class="bsuccess" style="color: green;"><?=$_GET['success']?></b><br>
    <?php } ?>
<form action="app/signup.php" method="post" >
        <h3>Sign Up</h3>
        <label >First Name</label>
        <input type="text" placeholder="First Name"  name="first_name">
        <label >Last Name</label>
        <input type="text" placeholder="Last Name"  name="last_name">
        <label >Email</label>
        <input type="text" placeholder="Enter Your Email"  name="email">
        <label >Password</label>
        <input type="password" placeholder="Password" name="password" >
        <label >Confirm Password</label>
        <input type="password" placeholder="Password" name="confirm_password" >
        <button type="submit">Sign Up</button>
        <div class="para">
        <p>Already  have an Account ? </p><a href="login.php">Login</a>
        </div>
    </form>
</body>
</html>