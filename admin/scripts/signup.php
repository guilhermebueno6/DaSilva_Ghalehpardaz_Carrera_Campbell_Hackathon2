<?php
   
    function signup($fname, $lname, $country, $email){
        $pdo = Database::getInstance()->getConnection();

        //Check if email exists
        $emailQuery = 'SELECT COUNT(*) FROM `tbl_` WHERE email =:email';
        $executeQuery = $pdo->prepare($emailQuery);
        $executeQuery->execute(
            array(
                ':email'=>$email
            )
            );
        if($emailQuery>0){
            //Display Come back message

            //Update the latest timestamp
            $updateTimeStamp = 'UPDATE ontario_summer SET lastupdate=now() WHERE email = :username';
            //TODO: prepare an executee this thing

            //send out the returning email
        }else{
            //insert into database the info provided



            //send out first time sub email
        }
        

    }