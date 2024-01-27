<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
</head>
<body>
        <div class="main_links">

            <div class="welcome">
                <h2>Welcome to the Online Admission Portal</h2>
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
                        if(isset($_SESSION['studentemail'])){
                        ?>
                            <a href="logout.php" class="login">Logout</a>
                        <?php
                        }else{
                        ?>
                            <a href="login.php" class="login">Login</a>
                        <?php
                        }
                        ?>
                    </li> 
                </ul> 
            </div>
 
        </div>

        <div class="aheading">
         <img src="https://www.superiorcolleges.edu.pk/wp-content/uploads/2023/09/Buildingwbp-scaled.webp" alt="">

     </div> 

     <div class="aheading_content">
         <h1><span style=" color:white;">Contact Us</span></h1>
         <h2><span style="color:white;">connect With Us - Let's Here From You</span> </h2>

     </div>
        
        

        <div class="contacts">

            <form action="contact.php" method="post" id="cf">
                <div class="left">
                    <div>
                        <input type="text" name="name" placeholder="Enter your name">
                    </div>
                    <div>
                        <input type="email" name="email" id="" placeholder="Enter your email">
                    </div>
                    <div>
                        <input type="text" name="address" id="" placeholder="Enter your address">
                    </div>
                    <div class="post_btn">
                      <input type="submit" name="post" value="Post" >
                    </div>
                </div>
                <div class="right">
                    <div>
                        <textarea name="msg" id="" cols="30" rows="12" placeholder="Enter your message"></textarea>
                    </div>
                </div>
            </form>

        </div>

        <?php   include 'include_files/footer.php'; ?>
</body>
</html>

<?php
    $con=mysqli_connect("localhost","root","","superior");
    if(isset($_POST['post'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $add=$_POST['address'];
        $msg=$_POST['msg'];

        $insert="insert into contact(name,email,address,msg)values
                ('$name','$email','$add','$msg')";
        $run=mysqli_query($con,$insert);
        if($run){
           echo "<script>alert('Message sent successfully')</script>";
        }
        else{
            echo "<script>alert('Message sending Failed')</script>";
        }
    }

?>