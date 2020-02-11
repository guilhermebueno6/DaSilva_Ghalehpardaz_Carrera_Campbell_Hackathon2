<?php

    function redirect_to($location){
        if($location != null){
            header('Location: '.$location);
            exit;
        }
    }

    function getContent(){
        $pdo = Database::getInstance()->getConnection();
        $content = 'SELECT * FROM `tbl_content`';
        $results = $pdo->query($content);

        if($results){
            return $results;
        }else{
            return 'Error, 404 not found';
        }
    }






