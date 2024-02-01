<?php
$uname = $_POST['uname']; echo $uname. "<br/>";
$pw = $_POST['pw']; echo $pw. "<br/>";

$con = mysqli_connect("localhost",$uname,$pw,"media");


if (mysqli_connect_errno()){
    echo "Falied to connect to MySQL:" . mysqli_connect_error();
    exit();
}else{
    echo "I got in!";
}

?>