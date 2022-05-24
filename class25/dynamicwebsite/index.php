<?php
include('includes/sessionstart.php');
include('includes/header.php');
?>
    <div class="col-md-12">
        <img src="img/banner.png" alt="Banner" class="w-100">
    </div>
    <div class="col-md-8">
        <h3>Posts</h3>
        <?php
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


            $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<h4>".$row["heading"]."</h4>";
                  echo "<p>".$row["content"]."</p>";
                  echo "<p>Posted on: ".$row["created"]."</p>";
                  echo '<hr>';
                }
              } else {
                echo "0 results";
              }

        ?>
    </div>
<?php
include('includes/footer.php');
?>