<?php


   
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
          
        }else{
            //insert into database the info provided
            $addUser = 'INSERT INTO ontario_summer.tbl_signup (fname, lname, country, lastupdate, user_email)
            VALUES ("'.$fname.'", "'.$lname.'", "'.$country.'", now(), "'.$email.'")';
            $insert_user_info = $pdo->query($addUser);
            // echo $addUser;

            // exit;
            $subj = 'Welcome to the Ontario Tourism Newsletter';
            $msg = 'Check out these awesome Places to visit';
            $headers = 'FROM: ontariotourism@noreply';



            //send out first time sub email
            mail($email, $subj, $msg, $headers);
            
        }
        

    }