 <?php
    
    include_once "../config/autoloader.php";

    class users{

        private $invalid_pass = '', $passconferror = ''; 
        
        function adduser($postArray){
            $password = $postArray['password'];
            $passconf = $postArray['passcon'];
            $target_dir = $_SESSION['root_dir'] . "/public/assets/image/uploads/";
            $profile = $_FILES['profpic']['name'];
            $shortenedFileName = substr($profile, 0, 5);
    
            $target_file = $target_dir . basename($_FILES["profpic"]["name"]);
    
            if (!$password == 8 ) {     
                $invalid_pass = "Your password must contain a <br> character, symbol, and numbers and <br> must be atleast 8 characters long";
                
            }
            else{
                if($passconf !== $password){
                    $passconferror = "passwords must match";
                }
                else{
                    $password= password_hash($password,PASSWORD_BCRYPT);
                }   
            }
    
            if($this->invalid_pass == "" && $this->passconferror == ""){
                // $invalid_pass = $_SESSION['invalid_pass'];

                $userregister = new user();
                $state = $userregister->adduser();

                if(! move_uploaded_file($_FILES["profpic"]["tmp_name"], $target_file)){
                    die("Error uploading profile picture.");
                }

                if($state[0]){
                    header("location: /signup"); 
                }
                
                header("location: /signin");
            }
        }

        function seluser(){

            $model = new user();
            $obj = $model->seluser();
 
            if($obj){
                header("location: /home");    
            }else{
                header("location: /signin"); 
            }
        }
    }

?>