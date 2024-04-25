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
    <link rel="icon" type="image/x-icon" href="assets\image\icare.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/signup.css">
    <title>icare Signup</title>

</head>
<body>
    <div class="container">
        <div class="image">
            <img src="..\assets\image\icare.jpeg">
        </div>
        <h1 class="h1">register into icare<h1>
        <form method="post" enctype="multipart/form-data">

            <label for="username"><i class="fa-solid fa-user"></i></label>
            <input type="text" placeholder="Enter your name please" name="name" required>

            <label for="username"><i class="fa-solid fa-envelope"></i></label>
            <input type="email" placeholder="Enter your email please" name="email" required>

            <label for="username"><i class="fa-solid fa-phone"></i></label>
            <input type="text" placeholder="Enter phone name please" name="phone" required>

            <label for="location"><i class="fa-solid fa-map-marker-alt"></i></label>
            <input type="text" placeholder="Enter current location(Region)" name="location" required>

            <label for="password"><i class="fa-solid fa-eye" id = "togglePassword"></i></label>
            <input type="password" placeholder="Enter current Password" name="password" id="password" required>
            <?php
            //  echo '<p style="color: red;">'.$invalid_pass.'</p>'
            ?>
             <label><i class="fa-solid fa-eye" id = "toggleconfirmPassword"></i></label>
            <input type="confirmPassword" placeholder="Confirm Password" name="passcon" id="confirmPassword" required>
            <label>Profile picture: </label>
            <input type="file" class="profile" name="profpic" >
            <input type="submit" value="Register" name="register" class="register">
            <p>have an account ?<a href="/signin"> Signin</p>
        </form>
    </div>

    <script src="/assets/javascript/script.js"></script>
</body>
</html>