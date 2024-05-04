
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/signin.css">
    <link rel="icon" type="image/x-icon" href="assets\image\icare3.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">

    <title>icare Signin</title>
</head>
<body>
    <div class="main-container">
        <div class="message">
            <div class="image">
                <img src="assets/image/icare3.png">
            </div>
            <h1>icare Signup</h1>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To proceed you are required to fill in your credentials then hit the Login button</p>
        </div>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <h1 class="h1">signin</h1>
                <input type="text" placeholder="Enter your name please" name="name" required>
                <label for="username" class="icons"><i class="fa-solid fa-user"></i></label>
                <input type="email" placeholder="Enter your email please" name="email" required><label for="username" class="icons"><i class="fa-solid fa-envelope"></i></label>
                <input type="password" placeholder="Enter current Password" name="password" required>
                <label for="password" class="icons"><i class="fa-solid fa-eye" id = "togglePassword"></i></label>
                <input type="submit" value="Login" name="login" class="register">

                <p>have an account ?<a href="signup">signup</p>
            </form>
        </div>
    </div>

    <script src="/assets/javascript/script.js"></script>
</body>
</html>