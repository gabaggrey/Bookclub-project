<?php
  include_once('books-fetch.php');
  $query = "SELECT * FROM books";
  $result = mysqli_query($link, $query) or die("Error: ".mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donate a book</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

   
<body>
<header>
        <nav class="">
            <ul class="navblock">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link">Our services</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact us</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Click to Login</a></li>
            </ul>
        </nav>

        <section class="jumbotron display-text">
            <h1 class="display-1">The Lagos Bookclub</h1>
            <h4  class="display-5">Our Books Database</h4>
            <P class="stars">********</P>

        </section>
        

    </header>
    <main>
        <h1>These are the list of Books in our database.</h1>
        <p>Use the contact page if you find something you like </p>

        <table contenteditable="true">
              <thead>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Publisher</th>
                    <th>Edition</th>
            </thead>
              
                  <tbody>
                    <?php 
                    while ($rows=mysqli_fetch_assoc($result))
                     {
                      ?>

                          <tr>
                            <td><?php echo $rows['book_title']; ?></td>
                            <td><?php echo $rows['book_author']; ?></td>
                            <td><?php echo $rows['book_publisher']; ?></td>
                            <td><?php echo $rows['book_edition']; ?></td>
                            </tr>
                      
                      <?php   
                    }
                    ?>
                  </tbody>
              
          </table>
          

    <footer>
    
    </footer>
    
</body>
</html>