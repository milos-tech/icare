<?php
    if(!isset($_SESSION['userInfo'])){
        header("Location:/index");
        exit();

    }

    $user = $_SESSION['userInfo'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="assets\image\icare3.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <title>icare</title>
</head>
<body>
    <div class="title">
        <div class="logo">
            <img src="assets\image\icare3.png">
            <span>Dashboard</span>
        </div>



        <input type="search" placeholder="search your favorite doctor">
        <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>

        <div class="pic">
            <img class="profile" src="assets/image/uploads/<?=$user['profile']?>";>
            <i class="fa-solid fa-camera"></i>

        </div>
    </div>

    <div class="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="appointment">Book appointment</a></li>
        </ul>
    </div>

    <div>


</body>
</html>