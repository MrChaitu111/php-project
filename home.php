
<?php
    session_start();

    $_SESSION; 
?>
<?php
    include('header.php');

?>
<?php
    include('dbcon.php');
?>

<div class="login_page1 d-flex">

    <a class="login_page btn btn-primary " href="login.php">Login</a>
    <a class="login_page btn btn-primary" href="signup.php">Sign Up</a>
</div>
<div class="box1">
    <h2 class="fs-4 head">All Employees</h2>
    <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">Add Employees</button>
</div>
<marquee class="marq h-2" 
                 direction="left" loop="infinite">
            
            <div class="text-light">
           BASIC_CURD OPERATIONS:-> You Don't Have an Employee Detailes can you Click Above Add Employees
            </div>
        </marquee>
       <table class="t1body table table-hover table-bordered table-striped ">
           <thead>
               <tr>
                   <th>Id</th>
                   <th>Username</th>
                   <th>Title</th>
                   <th>Content</th>
                   <th>Update</th>
                   <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "select * from `employe` ";

                    $result = mysqli_query($connection, $query);

                    if(!$result){
                        die ("query Failed". mysqli_error($connection));
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                 <tr class="trbody">
                    <td class="t1body1"><?php echo $row['id']; ?></td>
                    <td class="t1body1"><?php echo $row['username']; ?></td>
                    <td class="t1body1"><?php echo $row['title']; ?></td>
                    <td class="t1body1"><?php echo $row['content']; ?></td>
                    <td class="t1body1"><a class="btn btn-success" href="update_page.php?id=<?php echo $row['id']; ?>">Update</a></td>
                    <td class="t1body1"><a class="btn btn-danger" href="delete_page.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                </tr>
                <?php
                        }
                        
                    }
                ?>
            </tbody>
        </table> 
        <?php
            if(isset($_GET['message'])){
                echo "<h6 class='text-danger text-center'>".$_GET['message']."</h6>";
            }
        ?>
        <?php
            if(isset($_GET['insert_msg'])){
                echo "<h6 class='text-success text-center '>".$_GET['insert_msg']."</h6>";
            }
        ?>
         <?php
            if(isset($_GET['update_msg'])){
                echo "<h6 class='text-success text-center '>".$_GET['update_msg']."</h6>";
            }
        ?>
        <?php
            if(isset($_GET['delete_msg'])){
                echo "<h6 class='text-danger text-center '>".$_GET['delete_msg']."</h6>";
            }
        ?>
       
        <!-- Modal -->
<form action="insert_data.php" method="post" class="from_con" autocomplete="off">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">ADD EMPLOYEES</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" name="content" class="form-control">
                <input type="submit"  class="add1 btn btn-success" name="add_employees" value="ADD"/>
            </div>
        </div>
        <div class="modal-footer">
            <p class="para1">Add to the Employee detailes and Click to the add button</p>
        </div>
    </div>
</div>
</div>
</form>

        <?php
    include('footer.php');
?>
   