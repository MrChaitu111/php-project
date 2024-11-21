
<?php include('dbcon.php'); ?>

<?php
if(isset(($_GET['id']))){
    $id = $_GET['id'];

    $query = "delete from `employe` where `id` ='$id' ";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed".mysqli_error($connection));
    }
    else{
       header("location:home.php?delete_msg=Employee Deleted..");
       
    } 
}
?>


<?php
    include("footer.php");
?>