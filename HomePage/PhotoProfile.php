<?php
$db = mysqli_connect("localhost", "root", "","network");
$sql = "SELECT * FROM users_login  where username= '".$_SESSION['username']."'";
$result = $row = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {

    //  echo "<button type=\"submit\" name=\"upload\" class=\"w3-button-smal w3-theme\" style=\"float: right\";>  Insert </button>";
    echo "<div  style=' width:100%;'> ";
    echo "<br/>";
    echo "<div id='img_div'>";
    echo "<p style='display: none'>".$row['username']."</p>";
    echo "<img src='photo/".$row['photo_profile']."'style=\"width:100%; height:500px; border-radius: 100%;\" >";
    //      echo " <input type=\"file\" name=\"image\"  class=\"inputImage\"  style=\"background:white; width:100%;\">";
    echo "</div>";
    echo "</div>";
    echo"";
}
?>