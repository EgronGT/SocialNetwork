<?php
$db = mysqli_connect("localhost", "root", "","network");
$sql = "SELECT * FROM users_login  where username= '".$_SESSION['username']."'";
$result = $row = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {

    //  echo "<button type=\"submit\" name=\"upload\" class=\"w3-button-smal w3-theme\" style=\"float: right\";>  Insert </button>";


    echo "<a href=\"#\" class=\"w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-orange\" >";

    echo "<img src='photo/".$row['photo_profile']."' class=\"w3-circle\" style=\"width:23px; height:23px; alt=\"Avatar\" border-radius: 100%;\" >";
    //      echo " <input type=\"file\" name=\"image\"  class=\"inputImage\"  style=\"background:white; width:100%;\">";

    echo"</a>";
}
?>

