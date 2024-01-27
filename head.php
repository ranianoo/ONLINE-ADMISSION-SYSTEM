<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="header">


        <div class="top">
            <div>
                <h4>Superior University</h4>
            </div>
            <div class="links">
                <a href="http://facebook.com"><i class="fa-brands fa-facebook"></i></a>
                <a href="http://tweeter.com"><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa fa-search"></i></a>
            </div>
        </div>


        <div class="down">

            <div class="left">
                <!-- <h1>Superior University Bhalwal</h1> -->
                <img src="pic/logo1.png" alt="logo" id="logo">
            </div>

            <div class="right">
                <div class="address">
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <h3><span>Address</span></h3>
                        <h4>Near Sabrina Hall,Ajnala Road,Bhalwal,Sargodha,Panjab</h4>
                    </div>
                </div>
                <div class="address">

                    <div>
                        <h3>Contact Us:</h3>
                        <h4>(048)6250312</h4>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- =============================================================== -->


    <div class="main_links">

        <div class="welcome">
            <h2> Online Admission Portal</h2>
        </div>

        <div class="links">
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="about.php">About</a></li>

                <li><a href="How To Apply.php">How To Apply</a></li>
                <li><a href="Merit List.php">Merit List</a></li>

                <li><a href="contact.php">Contact Us</a></li>
                <li> <a href="register.php">Register</a></li>
                <li>
                    <?php
                    if (isset($_SESSION['studentemail'])) {
                        ?>
                        <a href="logout.php" class="login">Logout</a>
                        <?php
                    } else {
                        ?>
                        <a href="login.php" class="login">Login</a>
                        <?php
                    }
                    ?>
                </li>
            </ul>
        </div>

    </div>

    <!-- ======================================================== -->
</body>

</html>