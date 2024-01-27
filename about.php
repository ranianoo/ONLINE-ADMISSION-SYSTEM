<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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


     <div class="About">
         <img src="https://plus.unsplash.com/premium_photo-1682974406899-6466af85727c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTd8fHN0dWRlbnQlMjBncm91cHxlbnwwfHwwfHx8MA%3D%3D" alt="About">

     </div> 

     <div class="About_content">
         <h1><span style=" color:white;">About Us</span></h1>
         <h2><span style="color:white;">Superior University is a place where desires & dreams come true</span> </h2>

     </div>
     
     <div class="contanior">
         <div class="left">
             <h1><span style="color: #f6bb18;">Why choose <br> <span style="color:teal;">Superior University</span></h1>
             <p>We are committed to enhancing the potentials of students faculty, staff, and all segments of our society by bringing a positive change  in their personal and career lives, motivating  them for self-enlightenment through  Quality Education, Personality Development, True Professionalism, and Career Planning; thus, adding value to our nation, and ultimately to humanity!</p>
              <a href=""><span style="color:white;">Enroll Now</span></a>
         </div>
         <div class="right">
             <img src="data:image/jpeg;base64,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" alt="">
         </div>
        <div class="center">
             <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dW5pdmVyc2l0eSUyMHN0dWRlbnR8ZW58MHx8MHx8fDA%3D" alt="">
         </div>
     </div> 
   
   
     <div class="card">
         <div class="box1">
            <h1>Our Vision </h1><br>
            <p>To become the first choice of students and a Superior educational institute of Pakistan.
            </p>
         </div>
         <div class="box2">
             <h1>Our Mission </h1><br>
             <p>We are committed to transform the lives of students, faculty and staff by providing them a Superior learning experience. Our plan EQ & IQ enables them to lead a meaningful & rewarding life. </p>
         </div>
         <div class="box3">
            <h1>Our Values</h1><br>
            <p>

             Student Success<br>
             Excellence<br>
             Innovation & Creativity<br>
             Team Work<br>
             Agility<br>
              Fairness

             </p>
         </div>          
      

     </div>
     

        <?php   include 'include_files/footer.php'; ?>
        

</body>
</html>