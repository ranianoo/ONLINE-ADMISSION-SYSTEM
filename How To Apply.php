<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
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

        <div class="para">
             <h1>How To Apply</h1> <br> <hr> <br>
             <h1>Quick Tips</h1><hr><br>
             <p>  1. You must have a photograph, a mobile phone, email, CNIC copy of candidate and his/her father and copies of all testimonials before start.<br>
               2. Register at www.admissions.su.edu.pk using your mobile number. <br>
               3. Complete your online application form. A challan form for application processing fee will be generated which can be deposited in any branch of HBL. Then Candidate has to attach the scan copy of this deposited challan in the online application for its final submission. <br>
               4. Before submission of applications, make sure that all required information have been provided correctly because candidate will not be able to edit his/her application once submitted.<br>
               5. To apply for another program, candidate has to create and submit another application with new processing fee.<br>
               6. After closing date of admission application, program wise master lists will be displayed for three days to entertain data correction requests through candidate accounts. After three days, no correction would be entertained at any cost.<br>
               7. Successful candidates will be intimated via SMS, email and website portal .<br>
               8. At the time of admissions the candidates will be required to submit their original terminal degree/DMC, application form, copies of all academic testimonials, CNIC (applicant + father/guardian) and an affidavit (specimen available on website) on stamp paper of minimum Rs. 50 at relevant department.<br>
               9. The related department will generate enrolment fee challan form. After depositing challan, in any HBL branch the departmental copy of this challan is necessary to be submitted in related department within the date mentioned on challan forms for approval of admission/enrolment. Separate admission notices will be published for admissions in Pharm-D and DPT disciplines.<br>
             </p>



        </div>




</body>
</html>