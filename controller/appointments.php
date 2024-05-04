<?php
    include_once "../config/autoloader.php";

    class appointments{
        function addappointment(){

            $added = new appointment();
            $add = $added->addappointment();

            if($add[0]){
                header("location: /appointment"); 
            }
            
            header("location: /payment");
        }
    }
?>