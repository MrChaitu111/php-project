<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

                    $query = "select * from `employe` where  `id` = '$id'  ";

                    $result = mysqli_query($connection, $query);

                    if(!$result){
                        die ("query Failed". mysqli_error($connection));
                    }
                    else{
                        $row = mysqli_fetch_array($result);
                       
                    }
    }
?>
            <?php
                if(isset($_POST["update_employees"])){
                    if(isset($_GET["id_new"])){
                        $idnew =$_GET['id_new'];
                    }
                    $username = $_POST['username'];
                    $title = $_POST['title'];
                    $content = $_POST['content'];

                    $query ="update `employe` set `username` = '$username', `title` ='$title', `content` ='$content' where `id` ='$idnew' ";

                    $result = mysqli_query($connection, $query);

                    if(!$result){
                        die ("query Failed". mysqli_error($connection));
                    }
                    else{
                        header('location:home.php?update_msg=You Have been Updated Employee detailes..');
                    }
                }
            ?>
           
<div class="update_container">
<form action="update_page.php?id_new=<?php echo $id;?>" method="post">
    <h3>Update Detailes</h3>
    <div class="form-group">
        <label for="username"> Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $row['title']  ?>">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" name="content" class="form-control" value="<?php echo $row['content']  ?>">
    </div>
    <input type="submit"  class="update_em" name="update_employees" value="Update"/>

</form>
    
    </div>

<?php include('footer.php'); ?>

