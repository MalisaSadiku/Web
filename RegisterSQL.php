<?php    
    $username= $_POST['emriMbiemri'];
    $email= $_POST['email'];
    $password= $_POST['password'];

    $conn = new mysqli('localhost','root','','databazaweb');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
    $stmt= $conn->prepare("insert into userat(EmriMbiemri, Email,Password)
    values(?,?,?)");
    $stmt->bind_param("sss", $username,$email,$password);
    $stmt->execute();
    header('Location:Home.php');
    $stmt->close();
    $conn->close();

}

?>