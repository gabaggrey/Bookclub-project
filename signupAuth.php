<?php
    include'connection.php';

    // Escape user inputs for security

    $fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
    $user_Email = mysqli_real_escape_string($link, $_REQUEST['user_Email']);
    $password = mysqli_real_escape_string($link, $_REQUEST['password']);
    $user_Phone = mysqli_real_escape_string($link, $_REQUEST['user_Phone']);
    $address = mysqli_real_escape_string($link, $_REQUEST['address']);
     
    // Attempt insert query execution
    $sql = "INSERT INTO members (fullname, user_Email, password, user_Phone, address) VALUES ('$fullname', '$user_Email', '$password', '$user_Phone', '$address')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
?>