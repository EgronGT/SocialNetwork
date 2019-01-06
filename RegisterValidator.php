<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('127.0.0.1', 'root', '', 'network');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);

    $photo_profile  = mysqli_real_escape_string($db, $_POST['photo_profile']);
    $photo_cover  = mysqli_real_escape_string($db, $_POST['photo_cover']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    // $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);



    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
        $query = "INSERT INTO users_login (name, surname, username, photo_profile, photo_cover, password) 
					  VALUES('$name','$surname', '$username', '$photo_profile', '$photo_cover', '$password')";
        mysqli_query($db, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: LoginPage.php');
    }

}

// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users_login WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;

            while ($row = mysqli_fetch_array($result)){
                $_SESSION['id'] = $row['id'];
            }

            $_SESSION['success'] = "You are now logged in";
            header('location: HomePage.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>