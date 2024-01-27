<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superior</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
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
         <h1><span style=" color:white;">Merit List</span></h1>
         
     </div>
       
       
        <div class="merit">
            <h2>Select your Department</h2>
            <form action="" method="get">
                <select name="department" id="">
                    <option value="it" >Information Technology</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="english">English</option>
                    <option value="math">Mathmatics</option>
                </select>
            </form>
        </div>

      
       

</body>
</html>