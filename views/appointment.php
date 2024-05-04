<?php


    // $controller = new appointments;
    // $controllers = $controller->addappointment();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/appointment.css">
    <link rel="icon" type="image/x-icon" href="assets\image\icare3.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <title>icare</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form method="post">
                <h1>Book an Appointment</h1>

                <p>Just follow the procedues below then click on the button to book an appointment with a health care professional</p>

                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="age" id="age">Age :</label>
                <input type="number" name="age">

                <label for="date" id="date">Date :</label>
                <input type="date" name="appointdate" placeholder="set appointment date" required>

                <label for="description" id="description">Description :</label>
                <textarea name="reasons" rows="4" placeholder="detailly describe how you are feeling" required></textarea>
<!-- 
                <label for="payment">Choose payment method</label>
                <div class="payment">
                    <button class="money">
                        <img src="assets/image/mobilemoney.webp">
                    </button>
                    <button class="money">
                        <img src="assets/image/orangemoney.webp">
                    </button>
                </div> -->

                <input type="submit" name="submit" value="Submit" class="submit">
            </form>
        </div>
        <div class="image">
            <img src="assets/image/doctor.jpg">
        </div>
    </div>
</body>
</html>