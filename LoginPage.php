<?php include('RegisterValidator.php') ?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funny Form</title>
    <link rel="stylesheet" href="Css_Style/registerPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        /*Inspired by Basecamp Register form */

        @keyframes shake{
            0%, 100% {
                transform: translateX(0);
            }

            10%, 30%, 50%, 70%, 90% {
                transform: translateX(-10px);
            }

            20%, 40%, 60%, 80% {
                transform: translateX(10px);
            }
        }

        @import url(https://fonts.googleapis.com/css?family=Jolly+Lodger);

        body{
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 1.0em;
            background-image:url("photo/hhighcountryberry_fordcenter001.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        html{
            height: 100%;
            width: 100%;
        }
        .container{
            background:rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            margin: auto;
            width: 700px;
            height: 700px;
        }

        .container2{
            width: 500px;
            height: 900px;
            background:rgba(0, 0, 0, 0.5);


        }



        .register{
            width: 500px;
            margin-top: 111px;
            float: right;
        }



        label {
            display:block;
            margin-bottom: 5px;
            font-size: 1.2em;
            color: #fffdfe;
        }
        .input-txt{
            box-sizing: border-box;
            padding: .4rem .9rem;
            width: 300px;
            margin-bottom: 1rem;
            border: 1px solid #3fb0da;
            color: #444;
            border-radius: 4px;
            font-size: 1.3em;
        }
        .error .input-txt:focus{
            border: 1px solid red;
            animation: shake .65s;
        }
        button[type=submit]{
            box-sizing: border-box;
            display:block;
            padding: 8px 30px 10px 30px;
            margin-top: 10px;
            width: 300px;
            text-shadow: 0 1px 1px #fff;
            border: 1px solid #7f3f1b;
            border-radius: 4px;
            color: #7a3e1a;
            font-size: 1.2em;
            background-image: linear-gradient(#e4d730,#998002);
        }






/*css for the button modal*/
        body {font-family: Arial, Helvetica, sans-serif;

        }

        /* The Modal (background) */

        .modal-content{
            background-image: url(photo/college20160.jpg);
            background-repeat:no-repeat;
            background-size: 100% 100%;

        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }


        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 400px;
            border: 1px solid #0efff3;
            width: 100%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }


        /*button signUp*/
        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #e4d730;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 22px;
            padding: 13px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 0px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }




    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body >



<div class="container" data-position="1">



    <div class="register">

        <h1 class="register-heading">Login </h1>


        <form method="post" id="form" action="LoginPage.php">



            <div class="input-group">
                <label for="name">Username</label>
                <input type="text" name="username" placeholder="John Edwards" class="input-txt" data-pos="1" required/>
            </div>

            <div class="input-group">
            <label for="company">Password</label>
            <input type="Password" name="password" placeholder="Your Password." minlength="5" class="input-txt" data-pos="2" required/>
            </div>

            <button type="submit" class="btn" name="login_user">Login!</button>
            <br>

            <button href="sign-up"  id="myBtn" style="background: #df8505" ><span>Sign-Up</span></button>
        </form>
    </div>

</div>
</div>

        <!-- The Modal -->
        <div id="myModal" class="modal" >

            <!-- Modal content -->
            <div class="modal-content" style="max-width:500px;height:800px;margin:auto">
                <span class="close">&times;</span>
<div class="container2" style="width: 590px;">
    <br>
                <form method="post" id="form" style="max-width:500px;height:700px;margin:auto; padding-right: 33px;">
                    <h2>Register Form</h2>

                   <br>
                    <div class="">

                        <label for="name">First Name</label>
                        <input class="input-field" type="text" placeholder="Name" name="name" style="width: 100%; height: 40px;" required/>
                    </div>

                    <br>
                    <div class="">
                        <label for="name">Last Name</label>
                        <input class="input-field" type="text" placeholder="Surname" name="surname" style="width: 100%; height: 40px;" required/>
                    </div>

                    <br>
                    <div class="">
                        <label for="name">Put your Username</label>
                        <input class="input-field" type="text" placeholder="Username" name="username" style="width: 100%; height: 40px;" required/>
                    </div>


                    <br>
                    <div class="">
                        <label for="name">Put Your Photo Profile</label>
                        <input type="file" name="photo_profile" class="input-field" style="width: 100%; height: 40px;" required/>
                    </div>

                    <br>
                    <div class="">
                        <label for="name">Put your Photo Cover</label>
                        <input type="file" name="photo_cover" class="input-field" style="width: 100%; height: 40px;" required/>
                    </div>


                    <br>
                    <div class="">
                        <label for="name">Put Your Password</label>
                        <input class="input-field" type="password" placeholder="Password" name="password_1" style="width: 100%; height: 40px;" required/>
                    </div>


                    <br>
                    <button type="submit" value="insert" name="reg_user" style="width: 100%; height: 50px;">Register</button>
                </form>

</div>



            </div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script  src="js/index.js"></script>



<script>    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>

</html>
