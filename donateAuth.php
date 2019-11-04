<?php
    include'connection.php';

    // Escape user inputs for security

    $book_title = mysqli_real_escape_string($link, $_REQUEST['book-title']);
    $book_author = mysqli_real_escape_string($link, $_REQUEST['book-author']);
    $book_publisher = mysqli_real_escape_string($link, $_REQUEST['book-publisher']);
    $book_edition = mysqli_real_escape_string($link, $_REQUEST['book-edition']);
     
    // Attempt insert query execution
    $sql = "INSERT INTO books (book_title, book_author, book_publisher, book_edition) VALUES
     ('$book_title', '$book_author', '$book_publisher', '$book_edition')";
    if(mysqli_query($link, $sql)){
        echo "Donation Received. Thank you";
        Header('Location: thankyou.php');
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
?>