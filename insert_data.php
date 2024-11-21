<?php
include("dbcon.php");

    if(isset($_POST['add_employees'])){
        // echo "yess it is Pressed";
        $username = $_POST['username'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        if(empty($username) || empty($title) || empty($content)){
            header('location:index.php?message=You Need to Fill the Username');      
         }
         else{
            $query = "insert into `employe` (`username`,`title`,`content`) values ('$username','$title','$content')";
                 
            $result = mysqli_query($connection, $query);

            if(!$result){
                die("".mysqli_error($connection));
            }

            else{
                header("location:home.php?insert_msg=Your data  has been added Successfully");
            }
        }
        
    }
?>