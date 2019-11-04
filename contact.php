<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <script>

            function validate(){

                if(document.contactForm.fullname.value == ""){
                alert( "Please provide your name!" );
                return false;
                }

                if(document.contactForm.user_Email.value == ""){
                alert( "Please provide your email!" );
                return false;
                }
                if(document.contactForm.message_title.value == ""){
                alert( "Please provide a title!" );
                return false;
                }

                if(document.contactForm.address.value == ""){
                alert( "Please provide your address!" );
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
                <li class="nav-item"><a href="#" class="nav-link">Contact us</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Click to Login</a></li>
            </ul>
        </nav>

        <section class="jumbotron display-text">
            <h1 class="display-1">The Lagos Bookclub</h1>
            <h4  class="display-5">Welcome:</h4>
            <P class="stars">********</P>

        </section>
        

    </header>
    <main>
    <section  class="form-section">
        <div>
                
            <form id="contactForm" name="contactForm" action="sendContact.php" method="POST" onsubmit="return(validate());">
                <label for="fullname">Full name: </label><br>
                <input type="text" name="fullname" id="fullname" required>
                <br>
                <label for="user_Email">Email: </label><br>
                <input type="email" name="user_Email" id="user_Email" required>
                <br>
                <label for="message_title">Title: </label><br>
                <input type="text" name="message_title" id="message_title" required>
                <br />
                <label for="message">Message: </label><br>
                <textarea name="message" id="message" rows="4" required></textarea>
                <br>
                <input type="submit" value="Submit" id="submit" name="submit">
            </form>

        </div> 
    </main>

    <footer>
    
    </footer>
</body>
</html>