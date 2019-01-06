<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>chatroom chat like facebook</title>



    <link rel="stylesheet" href="Css_Style/Chat.css">


</head>

<body>


<div class="chat_box">
    <div class="chat_head"> Chat Box</div>
    <div class="chat_body">

        <div class="user">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2_copy.jpg" />
            <div class="namechat"> joseph mejia</div>
        </div>


        <?php
        //chat system list
        $db = mysqli_connect("localhost", "root", "","network");
        $sql = "SELECT * FROM users_login";
        $result = $row = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($result)) {

            echo " <div class=\"user\" id=\"".$row['id']."\">";
            echo "<img src='photo/".$row['photo_profile']."' style=\"width:30px; height:30px; border-radius: 100%; padding:center;\">";
            echo" <div class=\"namechat\">" ;
            echo "".$row['username']."";
            echo" </div>" ;
            echo"</div>";
        }
        ?>







    </div>
</div>



<?php
//chat system list
session_start();
$db = mysqli_connect("localhost", "root", "","network");
$sql = "SELECT * FROM users_login";
$result = $row = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {


    echo "<div id=\"chats\">";
    echo " <div id=\"msg_box".$row['id']."\" class=\"msg_box\" style=\"right:280px; \">";
    echo " <div class=\"msg_head\">";
    echo "".$row['id']."";
    echo "<img src='photo/".$row['photo_profile']."' style=\"width:21px; height:21px; border-radius: 50%;\">";
    echo "<a href='show_user_profile.php'>".$row['username']."";
    echo " <div class=\"close\">x</div>";
    echo "</div>";
    echo "<div id=\"msg_wrap".$row['id']."\" class=\"msg_wrap\" style=\"width:250px;\">";
    echo"<div class=\"msg_body\"  >";

    $db1 = mysqli_connect("localhost", "root", "","network");
    $sql1 = "SELECT * FROM messages where msg_sender='".$_SESSION['username']."' and msg_reciever='".$row['id']."'";
    $result1 = mysqli_query($db1, $sql1);
    while ($row1 = mysqli_fetch_array($result1)){
        echo "<div class=\"msg_b\">".$row1['msg_content']."</div>";
    }


    echo" <div class=\"msg_push".$row['id']."\"></div>";
    echo" </div>" ;
    echo "<div class=\"msg_footer\"><textarea id='".$row['id']."' class=\"msg_input\" rows=\"2\"></textarea></div>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
}

?>







<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>



<script  src="JavaScript/index.js"></script>




</body>

</html>
