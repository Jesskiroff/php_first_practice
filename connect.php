<?php
$con = mysqli_connect("localhost","bill","volleyball","media");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: ";
  exit();
}
/*}else{
  echo "I'm in";
}
$sql = "Select * from media"
$results = mysqli_query($con, $sql);
echo "Returned rows are: " . $result -> num_rows;
while($row = mysqli_fetch_assoc($result)){
    echo $row['title'] ." " .$row['author'] "<br>";
}
*/
?>
