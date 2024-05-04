<?php
        // require_once "../controller/users.php";

        // $invalid = new users();
        // $postArray = $password; $passconf;
        // $inv = $invalid->adduser($postArray);
        // // $_SESSION['invalid_pass'] = $invalid_pass;

        

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="assets\image\icare3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/signup.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <title>icare Signup</title>

</head>
<body>
    <div class="main-container">
        <div class="message">
            <div class="image">
                <img src="..\assets\image\icare3.png">
            </div>
            <h1>icare Signup</h1>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To proceed you are required to fill in your credentials then hit the register button</p>
        </div>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <h1 class="h1">signup</h1>
                 
                <input type="text" placeholder="Enter your name please" name="name" required>
                <label for="username" class="icons"><i class="fa-solid fa-user"></i></label>

                <input type="email" placeholder="Enter your email please" name="email" required>
                <label for="username" class="icons"><i class="fa-solid fa-envelope"></i></label>

                <input type="text" placeholder="Enter phone name please" name="phone" required>
                <label for="username" class="icons"><i class="fa-solid fa-phone"></i></label>

                <select name="location" required>
                    <option value="Center" disabled selected>choose location(Region)</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Centre">Centre</option>
                    <option value="East">East</option>
                    <option value="Far North">Far North</option>
                    <option value="Littoral">Littoral</option>
                    <option value="North">North</option>
                    <option value="North West">North West</option>
                    <option value="South">South</option>
                    <option value="South West">South West</option>
                    <option value="West">West</option>
                </select>

                <input type="password" placeholder="Enter current Password" name="password" id="password" required>
                <label for="password" class="icons"><i class="fa-solid fa-eye" id = "togglePassword"></i></label>
                <?php
                //  echo '<p style="color: red;">'.$invalid_pass.'</p>'
                ?>
                <input type="Password" placeholder="Confirm Password" name="passcon" id="confirmPassword" required>
                <label class="icons"><i class="fa-solid fa-eye" id = "toggleconfirmPassword"></i></label>
                <label for="profile">Profile picture: </label>
                <input type="file" class="profile" name="profpic" >

                <input type="submit" value="Register" name="register" class="register">
                <p>have an account ?<a href="/signin"> Signin</p>
            </form>
        </div>
    </div>
    <script src="/assets/javascript/script.js"></script>
</body>
</html>