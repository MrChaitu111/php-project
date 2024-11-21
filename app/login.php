<?php

session_start();
function validate_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}
   if(isset($_POST["email"]) &&
   isset($_POST["password"])){
    include("./db_conn.php");

    
    $email = validate_input($_POST["email"]);
    $password = validate_input($_POST["password"]);

    if(empty($email)){
        $errorM = "Email is required";
        header("location:../login.php?error=$errorM");
    }else if(empty($password)){
        $errorM = "password is required";
        header("location:../login.php?error=$errorM");
    }else{
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();
            $first_name = $user['first_name'];
            $db_email = $user['email'];
            $id = $user['id'];
            $hash_password = $user['password'];
            
            if($email === $db_email){
                if(password_verify($password, $hash_password)){
                    $_SESSION['first_name'] = $first_name;
                    $_SESSION['email'] = $email;
                    $_SESSION['user_id'] = $id;
                    header("location:../home.php");
                }else {
                    $errorM = "Incorrect email or password..!";
                    header("location:../login.php?error=$errorM");
                }

            }else{
                $errorM = "Incorrect email or password..!";
                header("location:../login.php?error=$errorM");
            }
           
        }else{
            $errorM = "Incorrect email or password..!";
            header("location:../login.php?error=$errorM");
        }
    }
}else{
    header("location:../signup.php?error=$errorM");
}
?>