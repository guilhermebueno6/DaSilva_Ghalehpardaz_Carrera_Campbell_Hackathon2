<?php

require_once 'load.php';
$ip = $_SERVER['REMOTE_ADDR'];


if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $country = trim($_POST['country']);


    
    if(!empty($fname) && !empty($email)){
        //do the login here
        $message = signup($fname, $lname, $email, $country);
    }else{
        $message = 'Please fill out the required fields';
    }
}




   
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to the Login page</title>
</head>
<body>
<?php echo !empty($message)?$message:'';?>
<form action="index.php" method="post">
    <label>First Name</label><br>
    <input type="text" name="fname" value=""><br>

    <label>Last Name</label><br>
    <input type="text" name="lname" value=""><br>

    <label>Email:</label><br>
    <input type="text" name="email" value=""><br>

    <label>Country</label><br>
    <input type="text" name="country" value=""> <br>

    <button name="submit">Submit</button>
</form>
    
</body>
</html>