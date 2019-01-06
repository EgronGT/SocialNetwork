<?php
$db = mysqli_connect("localhost", "root", "","network");
$sql = "SELECT * FROM users_login  where username= '".$_SESSION['username']."'";
$result = $row = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {


    echo "<div id='img_div'>";

    echo "<p style='display: none'>".$row['username']."</p>";
    echo "<image src='photo/".$row['photo_cover']."' width=100%; '></image>";
    echo" " ;
    echo "</div>";


}

?>

<?php
$error = "";

if ($error == "") {


    $msg ="xxxxxxxxxxxxxx";
    //if upload button is pressed

    if (isset($_POST['upload_cover'])) {
        //the path to store the uploaded image
        $target ="photo/".basename($_FILES['imageCover']['name']);
        //connect with database
        $db = mysqli_connect("localhost","root", "","network");
        //get all the submitet data from the form
        $image = $_FILES['imageCover']['name'];
        // $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
        $sqli = "UPDATE users_login SET photo_cover='".$image."' where  username='".$_SESSION['username']."' " ;
        mysqli_query($db, $sqli); // stores the submitted data into database table : images
        // Now move uploaded image into folder images
        if (move_uploaded_file($_FILES['imageCover']['name'], $target)) {
            $msg = "Image upload successfuly";
        }else {
            $msg ="There was a problem updating image";
        }
    }

} else {
    echo $error;
}

?>
