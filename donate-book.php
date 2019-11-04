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

    <script>

            function validate(){

                if(document.donateForm.book-title.value == ""){
                alert( "Please provide Book Title!" );
                return false;
                }

                if(document.donateForm.book-author.value == ""){
                alert( "Please provide Author's name!" );
                return false;
                }
                if(document.donateForm.book-publisher.value == ""){
                alert( "Please provide Book Publisher!" );
                return false;
                }

                if(document.donateForm.book-upload.value == ""){
                alert( "Please upload a book!" );
                return false;
                }

            }
        </script>
</head>
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
            <h4  class="display-5">Donate a book</h4>
            <P class="stars">********</P>

        </section>
        

    </header>
<main>
    <section  class="form-section">
        <div>
                
            <form id="contactForm" name="donateForm" action="donateAuth.php" method="POST" onsubmit="return(validate());">
                <label for="book-title">Book Title: </label><br>
                <input type="text" name="book-title" id="book-title" required>
                <br>
                <label for="book-author">Book Author: </label><br>
                <input type="text" name="book-author" id="book-author" required>
                <br>
                <label for="book-publisher">Publisher: </label><br>
                <input type="text" name="book-publisher" id="book-publisher" required>
                <br />
                <label for="book-edition">Edition: </label><br>
                <select name="book-edition" id="book-edition" required>
                    <option value="" selected>---</option>
                    <option value="first-edition" >1st Edition</option>
                    <option value="second-edition">2nd Edition</option>
                    <option value="third-edition">3rd Edition</option>
                    <option value="fourth-edition">4th Edition</option>
                    <option value="fifth-edition">5th Edition</option>
                    <option value="sixth-edition">6th Edition</option>
                    <option value="seventh-edition">7th Edition</option>
                    <option value="eight-edition">8th Edition</option>
                    <option value="ninth-edition">9th Edition</option>
                    <option value="tenth-edition">10th Edition</option>
                    <option value="eleventh-edition">11th Edition</option>
                    <option value="twelfth-edition">12th Edition</option>
                    <option value="thirteenth-edition">13th Edition</option>

                </select>
                <br>
                
                <input type="submit" value="Submit" id="submit-book" name="submit-book">
            </form>

        </div> 
    </main>

    <footer>
    
    </footer>
    
</body>
</html>