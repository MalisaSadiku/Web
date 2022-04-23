<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>

        <link rel="stylesheet" href="style/main.css"/>
        <?php
    require_once 'ProductController.php';
 
?>
    <style>
        *{
            background-color: #171616;
        }
        .produktet{
    margin-left: 30px;
    margin-top: 155px;
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-template-rows:repeat(4,1fr) ;
}
.div{

    width: 300px;
    height: 300px;
    margin-left: 70px;
    margin-top: -150px;
    margin-bottom: 170px;
}
.div img{
    width: 300px;
    height: 200px;
}
.productName{
    color: white;
    font-size: 20px;
    text-align: center;
}
    </style>

    </head>
    <body>
        <header>
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="Home.php">HOME</a></li>
                        <li><a href="Contact.php">CONTACT</a></li>
                        <li><a href="Restaurants.php">RESTAURANTS</a></li>
                        <li><a href="Reservations.php">RESERVATIONS</a></li>
                        <li><a href="About.php">ABOUT</a></li>
                        <li><a href="login.php">LOG IN</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div>
             <p class="quote">“Pull up a chair. Take a taste. Come join us. Life is so endlessly delicious.” <br>
                                                   Menu</p>
             
        </div>
        <!-- <div class="food">
           <div class="sea"> 
              <img class="s1"  src="img/sea1.jpeg" alt="">
              <img class="s2" src="img/sea2.jpeg" alt="">
              <img class="s3" src="img/sea3.jpeg" alt="">
              
           </div>
           <div class="emer">
              <p class="p1">Karkaleca deti <br> me sos</p>
              <p class="p2">Midhje me supe</p>
              <p class="p3">Midhje ne tave</p>
           </div>

           <div class="sea1">
               <img class="s4" src="img/sea4.jpg" alt="">
               <img class="s5" src="img/sea5.jpg" alt="">
               <img class="s6" src="img/sea6.jpeg" alt="">
               
              
           </div>
           <div class="emer1">
               <p class="p4">Kombinim(Gaforre me karkaleca deti)</p>
               <p class="p5">Karkaleca me sallate dhe pomfrit</p>
               <p class="p6">Ushqim deti-gaforre</p>
           </div>

           <div class="meat">
               <img class="m1" src="img/meat1.jpg" alt="">
               <img class="m2" src="img/meat2.jpg" alt="">
               <img class="m3" src="img/meat3.jpg" alt="">
               
           </div>
           <div class="emer2">
               <p class="p7">Biftek</p>
               <p class="p8">Mish skare</p>
               <p class="p9">Mish vici</p>
           </div>
        

           <div class="fast">
             <img class="f1" src="img/ff1.jpg" alt="">
             <img class="f2" src="img/ff2.jpeg" alt="">
             <img class="f3" src="img/pizza1.gif" alt="">
            
           </div>
           <div class="emer3">
                <p class="p10">Hamburger</p>
                <p class="p11">Hamburger double</p>
                <p class="p12">Pice proshute</p>
           </div>

           <div class="pasta">
                <img class="p1" src="img/pasta1.jpg" alt="">
                <img class="p2" src="img/pasta1.jpg" alt="">
                <img class="p3" src="img/sand1.jpg" alt="">
                
           </div>
           <div class="emer4">
                <p class="p13">Shpageta</p>
                <p class="p14">Makarona me djath</p>
                <p class="p15">Sandwich</p>

           </div> 
 
        </div>
    

        </div>-->
         <div class="produktet">
     <?php
       $products =new ProductController;
       $all=$products->readData();
       for($i = 0; $i < count($all); $i++) {
        echo '
        <div class="div" >
        <img src="'.$all[$i] ['product_image'].'" alt="">
        <p class="productName">' .$all[$i]['product_name']. '</p>
        
        </div>' ;
       }

     ?>
    </div>     

        

        
        <footer>
            <div class="footer">
                 
                <a href="http://www.facebook.com">
                <img src="img/sm1.png" alt="Facebook">
                </a>
                <a href="http://www.google.com">
                <img src="img/sm2.png" alt="Google">
                </a>
                <a href="https://www.instagram.com/hospeshotelkosova/">
                <img src="img/sm3.png" alt="Instagram">
                </a>
                <p>© 2021 Malisa Sadiku, Ardit Byqmeti All rights reserved.</p>
            </div>
        </footer>
        <link rel="stylesheet" href="style/main.js">
    </body>
</html>