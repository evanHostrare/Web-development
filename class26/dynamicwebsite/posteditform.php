<?php 
include('includes/sessionstart.php');

    if(!isset($_SESSION["loggedin"]) OR $_SESSION["loggedin"]==0){
        header('Location: http://localhost/dynamicwebsite/login.php'); 
    }
?>
<?php
include('includes/header.php');
$postid=$_GET['postid'];

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "dynamicwebsite";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM posts where id='$postid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $postid=$row["id"];
     $postheading=$row["heading"];
     $postcontent=$row["content"];
    }
    ?>
<div class="col-md-8">        
    <h3>Post Update Form</h3>
        <form action="postupdate.php" method="post" class="col-md-5 bg-light mt-5">
            <div class="form-group">
            <a href='postdelete.php?postid=<?php echo $postid;?>' onclick="return confirm('Are you sure you want to delete this item?');" style="float:right;">Delete</a>
                <label for="exampleInputEmail1">Heading</label>
                <input type="text" name="heading" value="<?php echo $postheading;?>" class="form-control" placeholder="Enter Heading" id="exampleInputEmail1" aria-describedby="emailHelp">
                <input type="hidden" value="<?php echo $postid;?>" name="postid">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <input type="text" name="content" class="form-control" value="<?php echo $postcontent;?>" placeholder="Enter Content" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
<?php

  } else {
    echo "Post data id not in our database";
  }
?>
    
<?php
include('includes/footer.php');
?>