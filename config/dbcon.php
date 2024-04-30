<?php

// $conn = new mysqli('localhost','root','Password','icare');
// if($conn->connect_error){

//     die('Connection Failed : '.$conn->connect_error);
// }

class icare extends SQLite3{
    function __construct(){
        $this->open('icare.db') ; 
    }
}

$conn = new icare('icare.db');
if(!$conn){
    echo $conn->lastInsertError();
}

return $conn;

?>


