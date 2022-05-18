<div class="col-md-4">                    
                    <a href="index.php">Home</a>
                    <?php
                    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==0){
                    ?>
                    <a href="login.php">Login</a>
                    <?php 
                    }
                    ?>
                    <?php            
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==1){
                        ?>
                    <a href="logout.php">Logout</a>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-12 text-center">
                    Copyright Reserved Ninzas 
                </div>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();
	});
	</script>
  <script src="css/bootstrap/dist/js/bootstrap.min.js" ></script>
    </body>
</html>