<?php
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    margin-top: 5px;
    height: 60%;
    width: 30%;
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
    margin-top:-14px ;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    line-height: 2px;   
    /* text-align: center; */
}

label{
    display: block;
    margin-top: 10px;
    font-size: 16px;
    font-weight: bold;
}
input{
    display: block;
    height: 40px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 15px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    height: 40px;
    margin-top: 30px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    font-size: 18px;
    font-weight: 600;
    border-radius: 30px;
    cursor: pointer;
}
button:hover{
    background-color: #48c2be;
}
.para{
    display: flex;
    margin-top: 25px;
}
.para a{
    margin-left: 10px;
    text-decoration: none;
}
</style>
</head>
<body>
    <?php
    if (isset($_GET['error'])) { ?>
        <b style="color: red;"><?= $_GET['error'] ?></b><br>
    <?php } ?>

    <form action="app/login.php" method="post" >
        <h3>Login</h3>
        <label >Email</label>
        <input type="text" placeholder="Enter Your Email"  name="email">
        <label >Password</label>
        <input type="password" placeholder="Password" name="password" >
        <button type="submit">Login</button>
        <div class="para">
        <p>You Don't have an Account ?</p><a href="signup.php">Sign Up</a>
        </div>
    </form>
   
</body>

</html>