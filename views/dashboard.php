    <?php
    if(!isset($_SESSION['userInfo'])){
        header("Location:/index");
        exit();

    }
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

    <div class="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="#">
                <i class="fas fa-tachometer-alt"></i>
                <span>About</span>
            </a></li>
            <li><a href="#">                
                <i class="fas fa-tachometer-alt"></i>
                <span>Profile</span>
            </a></li>
            <li><a href="appointment">
                <i class="fas fa-tachometer-alt"></i>
                <span>Book apppointment</span>
            </a></li>
            <li class="signout"><a href="appointment">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a></li>
        </ul>
    </div>

    <div class="main-container">
        <div class="header-wrapper">
            <div class="header-title">
                <span>User</span>
                <h2>Dashboard</h2>
            </div>
            <div class="search-doctor">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="Search a doctor">
            </div>
            <div class="pic">
                <img class="profile" src="assets/image/uploads/<?$profile_image?>";>
            </div>
        </div>
    </div>

</body>
</html>