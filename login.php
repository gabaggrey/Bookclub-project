<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <script>

    function validate(){
        if(document.loginForm.user_Email.value == ""){
        alert( "Please provide your email!" );
        return false;
        }
        
        if(document.loginForm.password.value == ""){
        alert( "Please provide your password!" );
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
            </ul>
        </nav>

        <section class="jumbotron display-text">
            <h1 class="display-1">The Lagos Bookclub</h1>
            <h4  class="display-5">Login</h4>
            <P class="stars">********</P>

        </section>
        

    </header>
    <main>
        <section class="form-section">
            <p>Don't have a login? . <a href="signup.php">Click here to sign-up</a></p>
                <form name="loginForm" id="loginForm" action="loginAuth.php" method="POST" onsubmit="return(validate());">
                    <label for="user_Email">Username: </label><br>
                    <input type="email" name="user_Email" id="user_Email" required>
                    <br>
                    <label for="password">Password: </label><br>
                    <input type="password" name="password" id="password" required>
                    <br>
                    <input type="submit" value="Login" id="login" name="login">
                </form>
        </section>
    </main>

    <footer>
    
    </footer>
</body>
</html>