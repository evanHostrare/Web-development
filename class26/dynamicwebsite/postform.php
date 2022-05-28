<?php 
include('includes/sessionstart.php');

    if(!isset($_SESSION["loggedin"]) OR $_SESSION["loggedin"]==0){
        header('Location: http://localhost/dynamicwebsite/login.php'); 
    }
?>
<?php
include('includes/header.php');
?>
    <div class="col-md-8">        
    <h3>Post Entry</h3>
        <form action="postsave.php" method="post" class="col-md-5 bg-light mt-5">
            <div class="form-group">
                <label for="exampleInputEmail1">Heading</label>
                <input type="text" name="heading" class="form-control" placeholder="Enter Heading" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <input type="text" name="content" class="form-control" placeholder="Enter Content" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            
            <button type="submit" class="btn btn-primary">Save Post</button>
        </form>
    </div>
<?php
include('includes/footer.php');
?>