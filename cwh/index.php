<?php
$insert = false;
if (isset($_POST['name'])){

$SERVER = "localhost";
$username = "root";
$password ="";
$con = mysqli_connect($server, $username, $password);
if(!$con){die("connection to this database failed due to ".
mysqli_connect_error());
}

     $name = $_POST['name'];
      $age = $_POST['age'];
   $number = $_POST['number'];
    $email = $_POST['email'];
$subscribe = $_POST['subscribe'];




$sql ="INSERT INTO `gym-project`.`gym` (`name`, `age`, `number`, `email`, `subscribe`, `dt`) VALUES ('$name', '$age', '$number', '$email', '$subscribe', current_timestamp());";


if($con->query($sql) == true)
{$insert = true;}
else{ echo "ERROR: $SQL <br> $conn->error";}

$result = mysqli_query($con, $sql);
$con->close();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Welcome to GYM Registration🏋️‍♂️</h3>
       
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name📛">
            <input type="number" name="age" id="age" placeholder="Enter your age⌛">
            <input type="number" name="number" id="number" placeholder="Enter your cell number📱">
            <input type="email" name="email" id="email" placeholder="Enter your email📧">
            <input type="number" name="subscribe" id="subscribe" placeholder="How many months will be subscribe🔔">
            <button class="btn">Submit🆗</button>

            <?php
        if($insert == true)
    {echo"<h2 class='submitMSG'>🎉Thanks for Registration🎉</h2>";}?>
        
    

        </form>
    </div>
</body>
</html>