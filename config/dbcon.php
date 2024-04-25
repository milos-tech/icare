<?php

$conn = new mysqli('localhost','root','Password','icare');
if($conn->connect_error){

    die('Connection Failed : '.$conn->connect_error);
}
return $conn;



// $db = new SQLite3('database.sqlite');

// <<<END
//     $update = "UPDATE";
// END;

// $db->exec($update);

?>


