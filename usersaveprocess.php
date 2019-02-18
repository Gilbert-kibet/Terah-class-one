<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/12/19
 * Time: 9:49 AM
 */

if (isset($_GET['btnsubmit'])){
    $name = $_GET['x'];
    $email = $_GET['y'];
    $password = $_GET['z'];
    $encrpassword = md5($password);

    $conn = mysqli_connect("localhost","root","","safari");
    if (!$conn){
        echo"failed to connect to the DB";
    }else{
        $insert = mysqli_query($conn, "INSERT INTO `majina`(`ID`, `Jina`, `Arafa`, `siri`) VALUES (null,'$name','$email','$encrpassword')");
        if (!$insert){
            echo "Failed to save";
        }else{
            echo "$name saved succesfully";
            echo "<a href='usersave.php'>Add user</a>";
        }
    }
}

?>