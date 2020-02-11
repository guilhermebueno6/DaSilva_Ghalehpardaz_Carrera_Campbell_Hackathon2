<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


   
    function signup($fname, $lname, $country, $email){
        $pdo = Database::getInstance()->getConnection();

        //Check if email exists
             
        $emailQuery = 'SELECT COUNT(*) FROM `tbl_signup` WHERE user_email =:email';
        $executeQuery = $pdo->prepare($emailQuery);
        $executeQuery->execute(
            array(
                ':email'=>$email
            )
            );
            // echo $executeQuery;
            
            
         
            
        
        if($executeQuery->fetchColumn()>0){
            
            //Display Come back message
            
            
            
            //Update the latest timestamp
            $updateTimeStamp = 'UPDATE ontario_summer.tbl_signup SET lastupdate=now() WHERE user_email = :email';
            $queryUpdate = $pdo->prepare($updateTimeStamp);
            $queryUpdate->execute(
                array(
                    ':email'=>$email
                )
                );
            
            
            
            //TODO: prepare an executee this thing

            //send out the returning email
            $mail = new PHPMailer;

            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'ontariosummer456@gmail.com';          // SMTP username
            $mail->Password = 'hackathon'; // SMTP password
            $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                          // TCP port to connect to

            $mail->setFrom('ontariosummer@noreply.com', 'OntarioSummer');

            $mail->isHTML(true);  // Set email format to HTML
            $bodyContent = '<h1>Hello Again</h1>';
            $bodyContent .= '<p>It appears you already are a member of our Newsletter, That is Great!<br> Thank you for your suppport</b></p>';

            $mail->Subject = 'Resubmission';
            $mail->addAddress($email);   // Add a recipient
            $mail->Body    = $bodyContent;

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
          
        }else{
            echo 'Hello';
            //insert into database the info provided
            $addUser = 'INSERT INTO ontario_summer.tbl_signup (fname, lname, country, subdate, lastupdate, user_email)
            VALUES (:fname , :lname, :country ,now(), now(), :email)';
            $insert_user_info = $pdo->prepare($addUser);
            $insert_user_info->execute(
                array(
                    ':fname'=>$fname,
                    ':lname'=>$lname,
                    ':country'=>$country,
                    ':email'=>$email
                )
            );

            $mail = new PHPMailer;

            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'ontariosummer456@gmail.com';          // SMTP username
            $mail->Password = 'hackathon'; // SMTP password
            $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                          // TCP port to connect to

            $mail->setFrom('ontariosummer@noreply.com', 'OntarioSummer');

            $mail->isHTML(true);  // Set email format to HTML
            $bodyContent = '<h1>Discover New Places!</h1>';
            $bodyContent .= '<p>Welcome to the OntarioSummer Newsletter, Discover New places right now visiting our Website!<b><br>We wish you come Visit Us!</b></p>';

            $mail->Subject = 'Welcome to The OntarioSummer Newsletter';
            $mail->addAddress($email);   // Add a recipient
            $mail->Body    = $bodyContent;

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
           


            // //send out first time sub email
           
            
        }
        

    }