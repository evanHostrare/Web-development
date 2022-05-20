<?php 
include('includes/sessionstart.php');

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==1){
        $_SESSION["loggedin"]=0;
        header('Location: http://localhost/dynamicwebsite/register.php'); 
    }
?>
<?php
include('includes/header.php');
?>
    <div class="col-md-8">        
    <h3>Registration</h3>
        <form action="registersave.php" method="post" class="col-md-5 bg-light mt-5">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your Full Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
<?php
include('includes/footer.php');
?>