<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
           <form action="updateprocess.php" method="GET">
               <?php
               /**
                * Created by PhpStorm.
                * User: emobilis
                * Date: 2/13/19
                * Time: 10:21 AM
                */
                extract($_GET);
               $conn = mysqli_connect("localhost","root","","safari");
               $fetch = mysqli_query($conn,"SELECT * FROM majina WHERE ID=$y");
               if(!$fetch){
                   echo "Fetching failed";
               }else{
                   $row = mysqli_fetch_assoc($fetch);
                   extract($row);
               }
               ?>


               <input type="hidden" name="ID" value="<?php echo  $ID;?>"><br>
               <input type="text" name="name" value="<?php echo  $Jina;?>"><br>
               <input type="email" name="email" value="<?php echo  $Arafa;?>"><br>
               <input type="password" name="password" value="<?php echo  $siri;?>">
               <input type="submit" name="btnsubmit" value="update">
           </form>
</body>
</html>