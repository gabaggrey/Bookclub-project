<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-up page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <script>

            function validate(){

                if(document.signupForm.fullname.value == ""){
                alert( "Please provide your name!" );
                return false;
                }

                if(document.signupForm.user_Email.value == ""){
                alert( "Please provide your email!" );
                return false;
                }
                
                if(document.signupForm.password.value == ""){
                alert( "Please provide your password!" );
                return false;
                }

                if(document.signupForm.user_Phone.value == ""){
                alert( "Please provide your phone number!" );
                return false;
                }

                if(document.signupForm.address.value == ""){
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
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link">Our services</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact us</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Click to Login</a></li>
            </ul>
        </nav>

        <section class="jumbotron display-text">
            <h1 class="display-1">The Lagos Bookclub</h1>
            <h4  class="display-5">Sign-up</h4>
            <P class="stars">********</P>

        </section>
        

    </header>

    <main>
        

        <section  class="form-section">
        <div>
                <p>Have an account? <a href="login.php">Click here to Login</a></p>
            <form id="signupForm" name="signupForm" action="signupAuth.php" method="POST" onsubmit="return(validate());">
                <label for="fullname">Full name: </label><br>
                <input type="text" name="fullname" id="fullname" required>
                <br>
                <label for="user_Email">Email: </label><br>
                <input type="email" name="user_Email" id="user_Email" required>
                <br>
                <label for="password">Password: </label><br>
                <input type="password" name="password" id="password" required>
                <br>
                <label for="user_Phone">Phone: </label><br>
                <input type="tel" name="user_Phone" id="user_Phone" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" required>
                <br>
                <label for="address">Address: </label><br>
                <textarea name="address" id="address" required></textarea>
                <br>
                <input type="submit" value="Submit" id="submit" name="submit">
            </form>

        </div> 
        </section>
    </main>

    <footer>
    
    </footer>
    
    
</body>
</html>