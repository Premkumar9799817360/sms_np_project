<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name = $_POST['fname'];
    $studentid = $_POST['sid'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $city = $_POST['city'];
    $section = $_POST['section'];
    $percentage = $_POST['percent'];
    $gender = $_POST['gender'];


}

$con = new mysqli('localhost','root','','studentdata');
if($con){
    $sql = "insert into `insertdata`(fullname,student_id,email,mobile,course,city,gender,section,percentage_12th)values('$name','$studentid','$email','$phone','$course','$city','$gender','$section','$percentage')";
    $result = mysqli_query($con,$sql);
    if ($result) {
        # code...
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p{
        text-align: center;
    font-family: math;
    display: block;
    font-size: 50px;;
    margin-top: 229px;
    }
    body{
    background-color: darkorchid;
    }
    h3{
        text-align: center;
    border: 3px solid;
    display: block;
    width: 30%;
    border-radius: 8px;
    margin: 2px 513px;
    font-size: 28px;
    padding: 8px 3px;
    background-color: lightcoral;
    }
    .hed{
        margin-top: -28px;
    }
</style>
<body>
    <p>THANKYOU FOR VISITING</p>
    <div class="hed">
        <h3>Registration is Successful</h3>

    </div>
</body>
</html>
        <?php
    }
    else{
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
}
?>