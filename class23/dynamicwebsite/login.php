<?php 
include('includes/sessionstart.php');

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==1){
        header('Location: http://localhost/dynamicwebsite/index.php'); 
    }
?>
<?php
include('includes/header.php');
?>
    <div class="col-md-8">
        <form action="logincheck.php" method="post" class="col-md-5 bg-light mt-5">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login Now</button>
        </form>
    </div>
<?php
include('includes/footer.php');
?>