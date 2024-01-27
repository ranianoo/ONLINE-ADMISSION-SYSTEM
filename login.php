<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php include 'include_files/head.php'; ?>


        <div class="register">
            <div class="reg">
                <h1>Login Form</h1>
            </div>
            <div class="form">
                <form action="login.php" method="GET">
                    <div>
                        <input type="email" name="email" id="" placeholder="Enter your email">
                    </div>
                    <div>
                        <input type="password" name="pass" id="" placeholder="Enter your password">
                    </div>
                    <div class="reg_btn">
                        <input type="submit"  name="login" value="Login">
                    </div>
                    <div>
                        <p>If you are not register then : <span><a href="register.php">Register</a></span></p>
                    </div>
                    
                </form>
            </div>
        </div>


        <?php   include 'include_files/footer.php'; ?>

</body>
</html>

<?php
    $con=mysqli_connect("localhost","root","","superior");
    if(isset($_GET['login'])){
        $email=$_GET['email'];
        $pass=$_GET['pass'];
        $select="select * from register where email='$email'";
        $run=mysqli_query($con,$select);
        $count=mysqli_num_rows($run);
       
        if($count>0){
            $data=mysqli_fetch_assoc($run);
            $dbpass=$data['pass'];
            $_SESSION['studentemail']=$data['email'];
            if($pass===$dbpass){
                ?>
                 <script>
                 alert('Login Successful');
                 location.replace("index.php");
                 </script>
                 
                <?php
            }
            else{
                ?>
                 <script>alert('wrong password');</script>
                <?php
            }
        }
        else{
            ?>
            <script>alert('Email not exist Pleaese register first and then login');</script>
            <?php
        }    
    }
?>