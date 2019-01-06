
<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="Css_Style/buttons_upload_photo.css">
<link rel="stylesheet" href="Css_Style/UserData.css">
<link rel="stylesheet" href="Css_Style/DroppDownMenuSettings.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

    a {
        text-decoration: none ;
    }
    a:hover
    {
        color:white;
        text-decoration:none;
        cursor:pointer;
    }

     .inputImage{
         border: 1px solid black;

         background-color: #62d8e6;
         width:100%;

         height: 30px;
     }

    textarea
    {
        border:1px solid #999999;
        width:100%;
        margin:5px 0;
        padding:3px;
    }

</style>
<body class="w3-theme-l5">


<?php include ( "Chat.php" ); ?>
<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="HomePage.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home Page</a>
        <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
        <a href="UserProfile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green"></span></button>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                <a href="#" class="w3-bar-item w3-button">One new friend request</a>
                <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
                <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
            </div>
        </div>



        <div class="dropdown" style="float:right;">

            <?php include ( "Settings/UserPhotoSetting.php" ); ?>


            <div class="dropdown-content">
                <a href="#">Change Data</a>
                <a href="#">Settings</a>
                <a href="#">About-Us</a>
                <?php include ( "Logout/Logout.php" );?>
            </div>
        </div>




        <div class="w3-dropdown-hover w3-hide-small">
            <form>
                <input type="text" class="search_users" name="search" placeholder="Search.." style="position: fixed; width:25%; padding-right:45px;" />
            </form>
                </div>
            </div>
    </div>


<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->
            <div class="w3-card w3-round w3-white">
                <div class="w3-container">



                    <?php include ( "HomePage/PhotoProfile.php" ); ?>




                    <?php  if (isset($_SESSION['username'])) : ?>
                    <h1>  <strong><?php echo $_SESSION['username']; ?></strong></h1>
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                            <h3>
                                <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                            </h3>
                </div>
                    <?php endif ?>
                    <hr>
                    <!-- logged in user information -->


                    <p>Do you want to leave?</p>

                    <a href="LoginPage.php?logout='1'";">Log-Out</a>
                    <?php endif ?>

                    </h9>

               
                    <hr>

                </div>


            <!-- Accordion -->
            <div class="w3-card w3-round">
                <div class="w3-white">
                    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align">
                        <i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
                    <div id="Demo1" class="w3-hide w3-container">
                        <p>Some text..

                            <div class="container">
                                <h2>Large Modal</h2>
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                            <div class="modal-body">
                        <p>This is a large modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            </div>
        </div>







                        </p>
                    </div>
                    <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align">
                        <i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
                    <div id="Demo2" class="w3-hide w3-container">
                        <p>Some other text..</p>
                    </div>
                    <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align">
                        <i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
                    <div id="Demo3" class="w3-hide w3-container">
                        <div class="w3-row-padding">
                            <br>
                            <div class="w3-half">
                                <img src="photo/Avatar1.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="photo/Avatar1.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="photo/Avatar1.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="photo/Avatar1.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="photo/Avatar1.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="photo/Avatar1.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br>
            <br>


            <br>

            <!-- Alert Box -->
            <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
                <p><strong>Hey!</strong></p>
                <p>People are looking at your profile. Find out who.</p>
            </div>

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->

        <div class="w3-col m7">

            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h6 class="w3-opacity">What are you thinking today</h6>



                       <form method="POST" action="HomePage.php" enctype="multipart/form-data">
                           <div id="post">

                            <input type="file" name="image"  class="inputImage" style="background: white;" ">
<h7>Chose File</h7>
                               </div>


                           <?php
                            $error = "";
                            if (isset($_FILES["image"])) {
                                $allowedExts = array("jpg", "png","gif");
                                $temp = explode(".", $_FILES["image"]["name"]);
                                $extension = end($temp);

                                if ($_FILES["image"]["error"] > 0) {
                                    $error .= "Error opening the file<br />";
                                }

                                if (!in_array($extension, $allowedExts)) {
                                    $error .= "Extension not allowed<br />";
                                }


                                if ($error == "") {


                                    $msg ="xxxxxxxxxxxxxx";
                                    //if upload button is pressed
                                    if (isset($_POST['upload'])) {
                                        //the path to store the uploaded image
                                        $target ="photo/".basename($_FILES['image']['name']);

                                        //connect with database
                                        $db = mysqli_connect("localhost","root", "","network");

                                        //get all the submitet data from the form
                                        $image = $_FILES['image']['name'];
                                        $image_text = mysqli_real_escape_string ($db, $_POST['image_text']);
                                        $username= $_SESSION['username'];


                                        $sqli = "INSERT INTO images (image, text, usersID) VALUES ('$image', '$image_text','$username')";
                                        mysqli_query($db, $sqli); // stores the submitted data into database table : images

                                        // Now move uploaded image into folder images
                                        if (move_uploaded_file($_FILES['image']['name'], $target)) {
                                            $msg = "Image upload successfuly";

                                        }else {
                                            $msg ="There was a problem updating image";
                                        }
                                    }
                                    echo "uploaded successfully";
                                } else {
                                    echo $error;
                                }
                            }
                            ?>
                           <textarea id="text" cols="85%" rows="4" name="image_text" placeholder="Say something about this image..."style="width: 100%"></textarea>
                           <br/><br/>
                            <button type="submit" name="upload" class="w3-button w3-theme"  ><i class="fa fa-pencil"></i>  Post</button>
                       </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w3-container w3-card w3-white w3-round w3-margin">




                <?php
                $db = mysqli_connect("localhost", "root", "","network");
                $sql = "SELECT * FROM images ORDER BY id DESC";
                $result = $row = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_array($result)) {

                echo "<div class=\"w3-container w3-card w3-white w3-round w3-margin\">";

                    echo "<span class=\"w3-right w2-opacity\"> <h4>".$row['date']."</h4></span>";
                    echo "<form method='post' action='HomePage.php'>";
                    echo "<input type='hidden' name='id' value='".$row['id']."' />";
                    echo "<div ><h3>".$row['usersID']."</h3></div>";
                    echo "<div id='img_div'>";
                    echo "<button type='submit'  class=\"w3-button w3-theme-d1 w3-margin-bottom\" width=\'50px;'\>Delete</button>";
                    echo "<p style='display: none'>".$row['id']."</p>";
                    echo "<img src='photo/".$row['image']."' width=100%>";
                    echo "<p>".$row['text']."</p>";

                    echo " 
                   <button type=\"button\" class=\"w3-button w3-theme-d1 w3-margin-bottom\"><i class=\"fa fa-thumbs-up\"></i>  Like</button>
                   <button type=\"button\" class=\"w3-button w3-theme-d2 w3-margin-bottom\"><i class=\"fa fa-comment\"></i>  Comment</button>";
                    echo "</div>";
                    echo" " ;
                    echo"</div>";
                    echo"</form>";
                }
                ?>

                <?php

                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    $conn = mysqli_connect("localhost", "root", "","network");
                    $sql = "DELETE FROM images WHERE id=".$id;

                    if ($conn->query($sql) === TRUE) {
                        echo "Record deleted successfully";
                    } else {
                        echo "Error deleting record: " . $conn->error;
                    }
                }

                $connect = mysqli_connect("localhost", "root", "", "network");
                if(isset($_POST["id"]))
                {
                    $query = "DELETE FROM images WHERE id = '".$_POST["id"]."'";
                    if(mysqli_query($connect, $query))
                    {
                        echo 'Data Deleted';
                    }
                }
                ?>


                <br/>


                <div class="w3-row-padding" style="margin:0 -16px">

                    <div class="w3-half">

                    </div>
                </div>

            </div>

            <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                <img src="photo/Avatar1.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">16 min</span>
                <h4>Jane Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
                <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
            </div>



            <!-- End Middle Column -->
        </div>

        <!-- Right Column -->


        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
    <h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>




    // Accordion
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>



</body>
</html>