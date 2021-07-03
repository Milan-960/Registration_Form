
<?php
$insert = false;
if(isset($_POST['name'])){

    $SERVER ="localhost";
    $username="root";
    $password="";

    $con = mysqli_connect($SERVER, $username, $password);

  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $pr = $_POST['pr'];

     $sql = "INSERT INTO `bet`.`land` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Date`, `PR`)
    VALUES ('$name', '$age', '$gender', '$email', '$number', current_timestamp(), '$pr');";

if($con->query($sql) == true){
  
      $insert = true;
}
else{
      echo"ERROR $sql <br> $con->error";

}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon shortcut" href="https://www.nicepng.com/png/detail/50-504610_clipart-black-and-white-stock-registered-symbol-ukran.png" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Merienda+One&family=Tangerine:wght@700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="style.css?v=2">
      
      <title>Welcome to the registration page</title>

</head>
<body>

      <div class="container">
      <div class="login-box">
         <?php
          if($insert == true){
            echo "<p class='milan'> Thanks for submmiting your form we are happy to see you!! 😊</p>";
          }
          ?>
            <h1>😉 Welcome To The US trip Submission form 😉</h1>
            <p> Please fil out this below form to join with us in our US tip </p>
                  <h2>Register</h2>
                  <form action="index.php" method="post"> 
                    <div class="user-box">
                      <input type="text" name="name" required="">
                      <label>Name</label>
                    </div>
                    <div class="user-box">
                      <input type="int" name="age" required="">
                      <label>Age</label>
                    </div>
                    <div class="user-box">
                        <input type="gender" name="gender" required="">
                        <label>Gender</label>
                      </div>
                      <div class="user-box">
                        <input type="email" name="email" required="">
                        <label>Email</label>
                      </div>
                      <div class="user-box">
                        <input type="number" name="number" required="">
                        <label>Number</label>
                      </div>
                      <div class="user-box">
                        <input type="text" name="pr" required="">
                        <label>Other Requirement</label>
                      </div>
                      <button class="btn">SUBMIT</button>
                  </form>
                </div>
      </div>


      <div class="loader-container">
            <h1>Welcome<h1>
             <img src="https://user-images.githubusercontent.com/232559/33662579-886a97ac-da8c-11e7-9e99-0fc55aa24ffd.gif" alt="">
             <h1>Welcome</h1>
      </div>
 

       <script> 
            if ( window.history.replaceState ) {
                   window.history.replaceState( null, null, window.location.href );
               }
       </script>
      <script src="index.js"></script>
</body>
</html>