<?php
     if($_POST){
        include_once "../controller/indexcontroller.php";
        if(!empty($_POST["umane"]) && !empty($_POST["password"])){
            login($_POST);
        }
     }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="assets\image\icare.jpeg">
    <title>icare</title>
</head>
<body>
    <header class="title">
        <div class="logo">

        </div>
        <div class="menu">
            <ul class="content">
                <li>About us</li>
                <li>Contact us</li>
                <li><a href="signin">Signin</a></li>
                <li><a href="/signup">Signup</a></li>
            </ul>
        </div>
    </header>


</body>
</html>