<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>

        <link rel="stylesheet" href="style/main.css"/>

        
    </head>
    <body>
        <header>
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="Home.php">HOME</a></li>
                        <li><a href="Contact.php">CONTACT</a></li>
                        <li><a href="Restaurants.php">RESTAURANTS</a></li>
                        <li><a href="About.php">ABOUT</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="logdiv">
                <div>
                    <div class="leftside">
                        <img src="img/logo.png" class="image" alt="logo">
                    </div>
                </div>
                <div>
                    <div class="rightside">
                        <div class="container" id="container">
                            <div class="form-container sign-in-container">
                                <form action="" name="login" class="forms">
                                    <h1>Log In</h1><br>
                                    <input class="input input-field-login" required type="email" name="email" placeholder="Email address"/><br>
                                    <input class="input input-field-login" required type="password" name="password" placeholder="Password"/><br>
                                    <div class="wrapper">
                                        <button type="submit" id="submit" class="pagebutton input" name="submitted" onclick="validate(0)">Log In</button>
                                    </div><br>
                                    <p>Don't have an account? Click
                                        <a href="Register.php" target="_blank" style="color:gold;">HERE</a> to register.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer">
                <a href="http://www.facebook.com">
                <img src="img/sm1.png" alt="Facebook">
                </a>
                <a href="http://www.google.com">
                <img src="img/sm2.png" alt="Google">
                </a>
                <a href="http://www.instagram.com">
                <img src="img/sm3.png" alt="Instagram">
                </a>
                <p>© 2021 Malisa Sadiku, Ardit Byqmeti All rights reserved.</p>
            </div>
        </footer>
        <script src="style/main.js"></script>
    </body>
</html>