<?php
include_once("connect.php");

$sql = "SELECT * from songs";
$results = mysqli_query($con, $sql);
if (mysqli_num_rows($results)>0){
while ($row= mysqli_fetch_assoc($results)){
    echo $row ["title"] . ": " . $row["artist"] . "<br/>";
}
    

} else{
    echo "0";
}

?>