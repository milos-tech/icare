
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/signup.css">
    <link rel="icon" type="image/x-icon" href="assets\image\icare3.png">
    <title>icare Signin</title>
</head>
<body>
    <div class="message">
        <div class="image">
            <img src="..\assets\image\icare3.png">
        </div>
        <h1>icare Signup</h1>
        <p>To proceed you are required to fill in your credentials then hit the register button</p>
    </div>
    <div class="container">
        <h1 class="h1">signin into your account<h1>
        <form method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Enter your name please" name="name" required>
            <input type="email" placeholder="Enter your email please" name="email" required>
            <input type="password" placeholder="Enter current Password" name="password" required>
            <input type="submit" value="Login" name="login" class="register">

            <p>have an account ?<a href="signup">signup</p>
        </form>
    </div>
</body>
</html>