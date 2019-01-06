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

<?php
$error = "";

if ($error == "") {


    $msg ="xxxxxxxxxxxxxx";
    //if upload button is pressed

    if (isset($_POST['upload_profile'])) {
        //the path to store the uploaded image
        $target ="photo/".basename($_FILES['imageProfile']['name']);
        //connect with database
        $db = mysqli_connect("localhost","root", "","network");
        //get all the submitet data from the form
        $image = $_FILES['imageProfile']['name'];
        // $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
        $sqli = "UPDATE users_login SET photo_profile='".$image."' where  username='".$_SESSION['username']."' " ;
        mysqli_query($db, $sqli); // stores the submitted data into database table : images
        // Now move uploaded image into folder images
        if (move_uploaded_file($_FILES['imageProfile']['name'], $target)) {
            $msg = "Image upload successfuly";
        }else {
            $msg ="There was a problem updating image";
        }
    }

} else {
    echo $error;
}

?>

<?php

if(isset($_POST["submit_file"])){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "studentnetwork";

    $selected_username = $_COOKIE["user_first_name"];

    move_uploaded_file($_FILES["file"]["tmp_name"],"Profile_Pictures/".$_FILES["file"]["name"]);

    $connection_String = mysqli_connect($host,$user,$pass,$database);

    $myfiles = $_FILES["file"]["name"];

    $update_profile_query = "UPDATE users_table SET Profile_Picture = '$myfiles' WHERE Username='$selected_username'";

    $execute_update_profile_query = mysqli_query($connection_String,$update_profile_query);

}

?>
