 <?php
    
    include_once "../config/autoloader.php";

    class users{

        private $invalid_pass = '', $passconferror = ''; 
        
        function adduser($postArray){
            $password = $postArray['password'];
            $passconf = $postArray['passcon'];
            $target_dir = $_SESSION['root_dir'] . "/public/assets/image/uploads/";
            $profile = $_FILES['profpic']['name'];
    
            $target_file = $target_dir . basename($_FILES["profpic"]["name"]);
            $pattern = "/^[a-zA-Z0-9]{8,}$/";
    
            if (!preg_match($pattern, $password)) {     
                $this->invalid_pass = "Your password must contain <br> character, and numbers and <br> must be atleast 8 characters long";

                $_SESSION["invalid_pass"] = $this->invalid_pass;
                
            }
            else{
                if($passconf !== $password){
                    $this->passconferror = 'passwords must match';
                    $_SESSION['passconferror'] = $this->passconferror;
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

                if()

                if($state[0]){
                    header("location: signup"); 
                }

                header("location: signin");
            }
            header("location: signup"); 
        }

        function seluser(){
            $model = new user();
            $obj = $model->seluser();
 
            if($obj){
                header("location: /dashboard");    
            }else{
                header("location: /signin"); 
            }
            
        }
    }

?>