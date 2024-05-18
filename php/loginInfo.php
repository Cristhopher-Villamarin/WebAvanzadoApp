<?php 
$error;
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "admin" && $password == "123"){
            $error = "OK";
            echo "ACCEDIO";
            header ("Location: ../html/principal.html");
        }
        else{
            $error = "incorrecto";
            header ("Location: ../index.php?error=$error");
        }
        
    }else{
            $error = "vacio";
            header ("Location: ../index.php?error=$error");
    }
?>