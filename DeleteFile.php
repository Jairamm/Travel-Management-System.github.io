<?php
$conn = mysqli_connect("localhost","root","","collegedb");
$id= $_REQUEST['$idd'];
$sel = "SELECT * FROM `profile` WHERE id='$id' ";
$r = mysqli_query($conn,$sel);
$res= mysqli_fetch_array($r,MYSQLI_BOTH);
$loc= 'images/'.$res['9'];
$del = "DELETE FROM `profile` WHERE id='$id' ";
if (mysqli_query($conn,$del))
{
    unlink($loc);
    echo "FILE DELETE ";
    header("location:profile.php");
}
?>