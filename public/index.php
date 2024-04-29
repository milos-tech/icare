<?php
    session_start();

    $root = explode('\\', $_SERVER['DOCUMENT_ROOT']);
    array_pop($root);
    $root = implode('\\', $root);

    $_SESSION['root_dir'] = $root;

    include_once $root . "/config/autoloader.php";

    $req_met = $_SERVER['REQUEST_METHOD'];

    $route = explode('/', $_SERVER['REQUEST_URI'])[1];

    if($_SERVER['REQUEST_URI'] =="/" || in_array($route, ["", "index"])){

        require_once '../views/landing.php';
    }

    if(in_array($route, ["signup", "register"])){

        if($req_met == "POST"){
            $user_obj = new users();
            $user_obj->adduser($_POST);
        }
        else{
            require_once '../views/signup.php';

        }
    }

    if(in_array($route, ["signin", "login"])){
        if($req_met == "POST"){
            $usersignin = new users();
            $states = $usersignin-> seluser();
        }
        require_once '../views/signin.php';
    }

    // else{
    //     require_once '../views/home.php';   
    // }

?>