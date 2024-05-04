<?php
    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    class appointment{
        private $conn;
        function __construct(){
            $this->conn = require $_SESSION['root_dir'] .'/config/dbcon.php';
        }

        public function addappointment(){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $appointdate = $_POST['appointdate'];
            $description  = $_POST['reasons'];

            $sql = "INSERT INTO appointment(name, age, appointdate, description)
            values('$name', '$age', '$appointdate', '$description')";

            $execute = $this->conn->exec($sql);

            if(!$execute){
                return [False, $this->conn->lastErrorMessage()];
               
            }
            return [True, "Registration successful"];
        }
    }
?>