

<?php



$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "testing";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if (isset($_POST['submit'])) {



    $first = mysqli_escape_string ($conn, $_POST['fullname']);
    $last = mysqli_real_escape_string ($conn, $_POST['password']);
    $email = mysqli_real_escape_string ($conn, $_POST['email']);



                    //Insert the user into the database
                    $sql = "INSERT INTO userregistration(fullname, password,
                    email) VALUES ('$fullname','$password','$email',);";
                    mysqli_query($conn, $sql);

                    exit();








} else {
    header("Location: ../signup.php");
    exit();

}

