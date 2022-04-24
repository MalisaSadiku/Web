<?php

    require_once('modelUser.php');
    if(isset($_POST['submit'])){
    $regj= new User();
     $regj->setUsername($_POST['username']);
    $regj->setEmail($_POST['email']);
    $regj->setPassword($_POST['password']);
     $regj->setSelect1($_POST['select1']);
    $regj->insertoDhenat();
}


?>

<?php include_once("registerController.php")?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>

        <link rel="stylesheet" href="style/main.css"/>

        <style>
            *{
                margin:0;
                padding:0;
            }
            #submit{
                margin-top: 20px;
            }
            #username, #email, #password{
                width:500px;
            }
            main{
                width:90%;
            }
    
        </style>
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
            <div class="regdiv">
                <div>
                    <div class="leftside2">
                        <img src="img/logo.png" alt="logo">
                    </div>
                </div>
                <div>
                    <div class="rightside1">
                        <div class="container1" id="container">
                            <div class="form-container1 sign-in-container">
                                <form method="post" action="register.php" class="forms1">
                                    <h1>Registration</h1>
                                    <input id="username" name="username" class="input input-field-register" required name="emriMbiemri" type="text" placeholder="First & Last Name"/><br>
                                    <input id="email" name="email" class="input input-field-register" required name="email" type="email" placeholder="Email address"/><br>
                                    <input id="password" name="password" class="input input-field-register" required name="password" type="password" placeholder="Password"/><br>
                                    <Select class="option" name="select1" >
                            <option value="">Select</option>
                            <option value="user" name='user'>User</option>
                            <option value="admin" name='admin'>Admin</option>
                            </Select>  
                                    <div class="wrapper">
                                        <button type="submit" id="submit" class="pagebutton input" name="submit" onclick="validate(1)">Register</button>
                                    </div>
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