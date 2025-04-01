<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>insertlogin</title>
</head>
<style>
        h1 {
                text-align: center;
                color: white;
        }

        body {
                background-color: red;
        }
</style>

<body>
        <?php
        session_start();
        if (isset($_POST['submit'])) {
                $conn = mysqli_connect("localhost", "root", "", "collegedb");
                $a = $_POST["email"];
                $b = $_POST["password"];
                $sel = "SELECT * FROM `profile` WHERE  email ='$a' or password='$b'";
                $r = mysqli_query($conn, $sel);
                $res = mysqli_fetch_array($r, MYSQLI_BOTH);

                if ($res) {
                        $email = $res["email"];
                        $password = $res["password"];
                        $ids = $res["id"];
                        $N = $res["name"];
                        if ($password == $b && $email == $a) {
                                $_SESSION["user"] = $ids;
                                $_SESSION["user123"] = $N; //name 
                                // header("Location: profile.php?idd=$ids");
                                echo "<script>alert('login Successfully Completed'); window.location.href='index1.html';</script>";
                                exit();

                        } else {

                                echo "<h1>Email or Password Are Invalid 😒</h1> ";
                        }

                } else {
                        header("location:login_sign.php");
                }
        }
        ?>
</body>

</html>