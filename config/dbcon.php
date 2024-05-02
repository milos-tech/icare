<?php

$conn = new SQLite3($_SESSION['root_dir'].'/models/icare.sqlite');
if(!$conn){
    echo $conn->lastInsertError();
}

return $conn;
?>
