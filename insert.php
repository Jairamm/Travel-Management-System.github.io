<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    h1{
        text-align: center;
    }
    a{
        text-decoration: none
    }
  
</style>
<body>
    <?php
session_start();

if (isset($_POST["submit"])) {
      $name_s = $_POST["name"];
      $email_s= $_POST["email"];
    $conn = mysqli_connect("localhost", "root", "", "collegedb");
    $sel = "SELECT * FROM `profile` WHERE  Name ='$name_s' ";
    $r = mysqli_query($conn, $sel);
    $res = mysqli_fetch_array($r, MYSQLI_BOTH);
    if ($res){
        if ($email_s==$res["email"]   ) {
        echo "<h1>Username already Exist ↗️</h1>";
        echo "<a href='login_sign.html'><h1>Move to --> Login</h1></a>";
    }
    
    }
    else{
if (isset($_POST["submit"])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $_SESSION['user_name'] = $Name;
    $conn = mysqli_connect("localhost", "root", "", "collegedb");

    $ins = "INSERT INTO `profile`(`name`, `email`, `password`) VALUES ('$Name','$Email','$Password')";

if (mysqli_query($conn, $ins)) {
        
    header("location:dashboard.php");
        echo "Your are Registor Successfully ";
        echo "Thanks you";
    } else {
        echo "Incorrect information ";
    }
}
}
}
?>

</body>
</html>