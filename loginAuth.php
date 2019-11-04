<?php
include 'connection.php';

include "config.php";

if(isset($_POST['login'])){

    $user_Email = mysqli_real_escape_string($link,$_POST['user_Email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);

    if ($user_Email != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from members where user_Email='".$user_Email."' and password='".$password."'";
        $result = mysqli_query($link,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['user_Email'] = $user_Email;
            $_SESSION['password'] = $password;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}


//mysqli_close($link);
?>