<?php
    class user{

        private $conn;
        function __construct(){
            $this->conn = require $_SESSION['root_dir'] .'/config/dbcon.php';
        }

        public function adduser(){

            $name = $_POST['name'];
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $phone = $_POST['phone'];
            $location = $_POST['location'];
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $profile = $_FILES['profpic']['name'];

            if(!empty($profile)){
                $sql = "INSERT INTO users(name, email, tel, location,password, profile) 
                values('$name','$email', '$phone', '$location', '$password', '$profile')";
            }
            else{
                $sql = "INSERT INTO users(name, email, tel, location,password) 
                values('$name','$email', '$phone', '$location', '$password')";

            }
            $execute = $this->conn->exec($sql); 
            echo '<pre>';
            print_r($sql);
            die;
            if(!$execute){
                return [False, $this->conn->lastErrorMsg()];
               
            }
            return [True, "Registration successful"];
            
        }

        function seluser(){
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $select  = "SELECT * from users where email = '$email'";
            $query = $this->conn->query($select);
            
            if(!$query){
                return [False, $this->conn->errno];  
            }

            $sql = $query->fetchArray(SQLITE3_ASSOC);

             
            if(password_verify($password, $sql['password'])){

                unset($sql['password']);
                $_SESSION['userInfo'] = $sql;

                return True;
            };

            return False;  

        }

    }
?>