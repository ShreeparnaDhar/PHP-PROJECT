<?php
if(isset($_POST['name'])){
     $server ="localhost";
     $username ="root";
     $password = "";
     $con = mysqli_connect($server,$username,$password);
     if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
     }
     $name =$_POST['candidate name'];
     $age =$_POST['candidate age'];
     $email =$_POST['candidate email'];
     $gender =$_POST['candidate gender'];
     $number =$_POST['candidate phone number'];
     $others =$_POST['Others'];
       $sql = "INSERT INTO `candidate profile'.'candiate information` (`candidate name`, `candidate age`, `candidate gender`, `candidate email`, `candidate phone number`, `Others`, `Current time stamp`) VALUES ('$name', '$age', '$gender', '$email', '$number', '$others', current_timestamp());";
         echo $sql;
         if($con->query($sql) == true){
             echo "Successfully inserted";
         }
         else{
             echo "ERROR: $sql <br> $con->error";
         }
         $con->close();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="iitkgp.jpg" alt="IIT KGP" class="KGP">
    <div class="container">
        <h1>Welcome To IIT KGP</h1>
        <p>Enter Your Details To confrom your participation in the Trip</p>
        <form action="Index.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter Your Name">
        <input type ="text" name ="age" id="age" placeholder="Enter your age">
        <input type ="text" name ="gender" placeholder="Enetr your gender">
        <input type ="email" name ="email" placeholder="enetr your email">
        <input type="phone" name = "phone" placeholder="enter your phone number">
        <textarea name="description" id ="description" cols="30" rows="10" placeholder="enter your information"></textarea>
       <button class="btn">submit</button>
    </form>.
        
    </div>
    <script src ="index.js" ></script>
    <!-- INSERT INTO `candiate information` (`candidate name`, `candidate age`, `candidate gender`, `candidate email`, `candidate phone number`, `Others`, `Current time stamp`, `unique_id`) VALUES ('Shreeparna Dhar', '25', 'female', 'shreeparnadhar3@gmail.com', '8637090865', '879890976', current_timestamp(), ''), ('', '', '', '', '', '', current_timestamp(), '2'); -->
</body>
</html>