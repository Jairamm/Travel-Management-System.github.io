<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
     h1{
         background-color: yellow;
         text-align: center;
    }
    p{
        text-align: center;
        font-size: 20px ;
    }
    span{
        color: red;
        font-size: 30px ;
    }
    *{
        margin: 0px;
        padding :0px 
    }
    .con{
        width: 80% ;
        height:200px;
        margin: 0px auto ;
        position:relative;
        top:200px ;
    }
   </style>
</head>
    <h1>
        Welcome to Travelor.com 
    </h1>
<div class="con">
    <P>Your are Registration is Done <span> Mr.<?php echo $_SESSION['user_name'] ?><span></span> </P> 
</div>

</body>
</html>