<?php
include_once('connect.php');
$title = $_POST['title'];
$artist = $_POST['artist'];
$album = $_POST['album'];
$year = $_POST['year'];
$genre = $_POST['genre'];
/*$sql = "INSERT INTO `songs` (`songid`, `title`,`album`, `genre`, `artist`,`year`)
VALUES (NULL, '$title', '$album', '$genre', '$artist', '$year')";
*/
$sql = "SELECT songid, title, artist FROM songs";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "songid: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["artist"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  
?>