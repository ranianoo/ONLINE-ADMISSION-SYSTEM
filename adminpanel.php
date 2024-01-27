<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style3.css">
   
</head>

<body>
    <form action="adminpanel.php" method="post">
        <div>
            <input type="text" name="fn" placeholder="Enter form number" required>
        </div>
        <div>
            <input type="text" name="name" placeholder="Name of candidate"required >
        </div>
        <div>
            <input type="text" name="fname" placeholder="Enter father name" required>
        </div>
        <div>
            <input type="text" name="matric" placeholder="Enter Matric %" required>
        </div>
        <div>
            <input type="text" name="inter" placeholder="Enter Intermediate %" required>
        </div>
        <div>
            <input type="text" name="degree" placeholder="Enter Degree" required>
        </div>
        <div>
            <input type="text" name="board" placeholder="Enter Board" >
        </div>
        <div>
            <input type="text" name="merit  " placeholder="Marit">
        </div>
        <div>
            <input type="submit" value="Post" name="post">
        </div>
    </form>
</body>

</html>



<?php
$con = mysqli_connect("localhost", "root", "", "superior");
if (isset($_POST['post'])) {
    $form_n = $_POST['fn'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $matric = $_POST['matric'];
    $inter = $_POST['inter'];
    $degree = $_POST['degree'];
    $board = $_POST['board'];
    $merit = $_POST['merit'];

    $insert = "insert into merit(form,name,fathername,matricp,interp,degree,board,merit)
                values('$form_n','$name,','$fname','$matric','$inter','$degree','$board','$merit')";
    $run = mysqli_query($con, $insert);
    if ($run) {
        echo "<script>alert('Posted successfully');</script>";
    } else {
        echo "<script>alert('Failed');</script>";
    }
}

?>