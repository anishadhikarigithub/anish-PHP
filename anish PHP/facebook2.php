<?php
//$anishemail="adhikarianish423@gmail.com";
//$anishpassword="hplaptop";
//$email=$_POST["email"];
//$pass= $_POST["pass"];
//switch($email)
//{
//    case $anishemail:
//        if ($pass==$anishpassword)
//        {
//            echo "Hy Anish. welcome to facebook care centre. Your account name is Anish Adhikari.
//your account code no is 3373.You have 1697 facebook friend. ypu have 29 profile picture.98uploaded photos and 1000+ tagged photos.
//";
//        }

//        else
//        {
//            echo "<h1>Sorry we didnt find any accont of this email.</h1> + </br>
//please enter your email or phone again";
//        }
//        break;
//    default:
//           echo "invalid email";
        




//}


$server="localhost";
$database="anish";
$user="root";
$password="";
// Create connection
$conn = new mysqli($server, $user, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$em=$_POST["email"];
$p=$_POST["password"];
$sql = "SELECT id,name, email, password FROM user where email='".$em."' and password='".$p."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>