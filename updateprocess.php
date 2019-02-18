<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/13/19
 * Time: 9:45 AM
 */
if (isset($_POST['ID'])){
    extract($_POST);
    $conn = mysqli_connect("localhost","root","","safari");
    $update = mysqli_query($conn,"UPDATE `majina` SET Jina`='$name',`Arafa`='$email',`siri`='$password' WHERE ID=$id");
    header("location:viewusers.php");
}


?>