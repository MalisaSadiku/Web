<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>

        <link rel="stylesheet" href="style/main.css"/>

        

    </head>
    <body>
        <header>
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="Contact.php">CONTACT</a></li>
                        <li><a href="Restaurants.php">RESTAURANTS</a></li>
                        <li><a href="Reservations.php">RESERVATIONS</a></li>
                        <li><a href="About.php">ABOUT</a></li>
                        <li><a href="login.php">LOG IN</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="maincontact">
                <div>
                    <div class="leftside">
                        <img class="contactimg2" src="img/contact.png" alt="logo">
                    </div>
                </div>
                <div>
                    <div class="rightside">
                        <div class="contact">
                            <p class="fillform">Ask us anything by filling the form below...</p>
                            <form class="forms" role="form" action="message.php" method="POST" >
                                <div class="form-group"><input class="input input-field-contact" id="firstname" required type="text" name="firstname" placeholder="First Name"></div>
                                <div class="form-group"><input class="input input-field-contact" id="lastname" required type="text" name="lastname" placeholder="Last Name"></div>
                                <div class="form-group"><input class="input input-field-contact" id="email" required type="text" name="email" placeholder="Email"></div>
                                <div class="form-group"><textarea class="input input-field-contact" id="message" required rows="7" cols="7" name="message" placeholder="Message"></textarea></div>
                                <div class="wrapper"><button type="submit" class="pagebutton" name="contactsubmit" onclick="validate(2)">Send Message</button></div>
                            </form>
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