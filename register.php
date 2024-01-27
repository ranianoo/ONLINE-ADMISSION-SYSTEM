
<?php
$con=mysqli_connect("localhost","root","","superior");
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
                <h1>Registration Form</h1>
            </div>
            <div class="form">
                <form action="register.php" method="POST">
                    <div>
                        <input type="text"  name="fname" placeholder="Enter your first name">
                    </div>
                    <div>
                        <input type="text" name="lname"  placeholder="Enter your last name">
                    </div>
                    <div>
                        <input type="email" name="email" id="" placeholder="Enter your emil">
                    </div>
                    <div>
                        <input type="password" name="pass" id="" placeholder="Enter your password">
                    </div>
                    <div>
                        <input type="text" name="cell" id="" placeholder="Enter your number">
                    </div>
                    <div>
                        <input type="date" name="date" id="">
                    </div>
                   
                    <div>
                        <textarea name="address" id="" cols="52" rows="10" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="reg_btn">
                        <input type="submit" value="Register" name="register">
                    </div>
                    <div>
                        <p>If you are register then: <span><a href="login.php">Login</a></span></p>
                    </div>
                    
                </form>
            </div>
        </div>

        <?php   include 'include_files/footer.php'; ?>


</body>
</html>


<?php
    if(isset($_POST['register'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $cell=$_POST['cell'];
        $date=$_POST['date'];
        $address=$_POST['address'];

        $insert="insert into register(fname,lname,email,pass,number,date,address)values
                ('$fname','$lname','$email','$pass','$cell','$date','$address')";
        $run=mysqli_query($con,$insert);
        if($run){
           echo "<script>alert('Registered successfully')</script>";
        }
    }

?>