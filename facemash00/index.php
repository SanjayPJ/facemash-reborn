<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facemash";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:500,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

  <title>Facemash - Judge Their Face</title>
</head>

<body>
  <div class="row no-gutters">
    <div class="main-wrapper col-md-9">
      <div class="wrapper pt-5">
        <div class="header">
          <center>FACEMASH</center>
        </div>
        <div class="sub-header">
          <center>Were we let in for our looks? No. Will we be judged on them? Yes.</center>
        </div>
      </div>
      <div class="body-wrapper">
        <div class="row">
          <div class="col-md-1">
          </div>
          <?php 
            $sql = "SELECT * FROM user_details";
            $result = $conn->query($sql);
            $numberR = $result->num_rows;

            $randNum0 = rand(1, $numberR);
            $randNum1 = rand(1, $numberR);
            while($randNum0 == $randNum1){
              $randNum1 = rand(1, $numberR);
            }
            $first_sql = "SELECT * FROM user_details WHERE id=" . $randNum0;
            $first_result = $conn->query($first_sql);
            
            if ($first_result->num_rows > 0) {
                // output data of each row
                while($row = $first_result->fetch_assoc()) {
                    $first_name = $row["username"];
                    $first_pic_loc = $row["pic_loc"];
                    $first_id = $row["id"];  
               }
           }
           $second_sql = "SELECT * FROM user_details WHERE id=" . $randNum1;
           $second_result = $conn->query($second_sql);

           if ($second_result->num_rows > 0) {
               // output data of each row
               while($row = $second_result->fetch_assoc()) {
                   $second_name = $row["username"];
                   $second_pic_loc = $row["pic_loc"];  
                   $second_id = $row["id"]; 
             }
           }
          ?>
          <div class="col-md-5 text-center">
            <div class="img-container">
              <img src="assets/avathar/<?php echo $first_pic_loc; ?>" style="border: 2px solid #000" class="image">
              <div class="overlay">
                <div class="text">
                <a href="<?php $_PHP_SELF ?>?win=<?php echo $first_id?>&lost=<?php echo $second_id ?>"><i class="fas fa-heart"></i></a>
                  <br><?php echo $first_name; ?></div>
              </div>
            </div>
          </div>
          <div class="col-md-5 text-center">
            <div class="img-container">
              <img src="assets/avathar/<?php echo $second_pic_loc ?>" style="border: 2px solid #000" class="image">
              <div class="overlay">
                <div class="text">
                <a href="<?php $_PHP_SELF ?>?win=<?php echo $second_id?>&lost=<?php echo $first_id ?>"><i class="fas fa-heart"></i></a>
                  <br><?php echo $second_name; ?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="mean-header">
          <center>Who is Hotter? Give her a Heart</center>
        </div>
      </div>
    </div>
    <div class="side col-md-3">
      <div class="mean-header p-3">
        <center>HOT, HOTTER, HOTTEST</center>
      </div>
      <div class="alert-container mt-1">
        <?php 
        $sql = "SELECT * FROM user_details ORDER BY rank DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $name = $row["username"];
                $pic_loc = $row["pic_loc"];
                $rank = $row["rank"];
        ?>
        <div class="alert alert-danger ml-2 mr-2" role="alert">
          <div>
            <img src="assets/avathar/<?php echo $pic_loc?>" height="40px" width="40px;" style="border-radius: 50%;">
            <span class="ml-2"><b><?php echo $name ?></b></span>
            <span class="float-right"><?php echo $rank; echo "~"  ?></span>
          </div>
        </div>

        <?php 
        }
      } else {
          echo "0 results";
      }
      $conn->close();  
        ?>
      </div>
    </div>
  </div>
  </div>
</body>

</html>