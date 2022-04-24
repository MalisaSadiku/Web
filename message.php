<?php

        $conn = mysqli_connect("localhost", "root", "", "restaurants_db");
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
            if(!empty($_POST['firstname']) && !empty($_POST['lastname'])  && !empty($_POST['email']) && !empty($_POST['message'])){

        $firstname =  $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
       $email = $_REQUEST['email'];
       $message = $_REQUEST['message'];


  
        $sql = "INSERT INTO sendmessage (firstname, lastname, email, message)  VALUES ('$firstname', 
            '$lastname','$email','$message')";
          
        if(mysqli_query($conn, $sql)){
            header("Location: Contact.php?mesazhi=send");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }else {
        echo "All fields are required";
    }
          

        mysqli_close($conn);
        ?>