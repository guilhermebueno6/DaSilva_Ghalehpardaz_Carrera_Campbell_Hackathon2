<?php

require_once 'load.php';




if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $country = trim($_POST['country']);


    
    if(!empty($fname) && !empty($email)){
        //do the login here
        $message = signup($fname, $lname, $country, $email);
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

<!-- while loop for cycling through content on DB -->
    <!-- <div class="city-thing">
    <img src="images/<?php echo $row['image_name'];?>" alt="<?php echo $row['destination']?>"/>
        <h2><?php echo $row['destination']; ?></h2>
        <p><?php echo $row['description']; ?></p>
        <ul>
            <li>><?php echo $row['activity1']?><p><?php echo $row['icon1']?></p></li>
            <li><?php echo $row['activity2']?><p><?php echo $row['icon2']?></p></li>
            <li><?php echo $row['activity3']?><p><?php echo $row['icon3']?></p></li>
        </ul>
    </div> -->

    
</body>
</html>