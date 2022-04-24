<?php
    require_once('modelUser.php');
     $dhenat= new User();
    $myId=$_GET['id'];
     $record=$dhenat->lexoDhenatSipasIDs($myId);
        if (isset($_POST['edit'])){
      if ($myId==$dhenat->getId()){
     $dhenat->setUsername($_POST['username']);
      $dhenat->setEmail($_POST['email']);
     $dhenat->setPassword($_POST['password']);
     $dhenat->setSelect1($_POST['select1']);
       echo $dhenat->updateDhenat();
      return header('Location: adminPage.php');
    echo
     "<script>
 alert('dhenat jane PERDITSUAR me sukses');
 document.location='adminPage.php'
     </script>";
     }
    }  
?>


<!DOCTYPE html>
<htm>
    <head>
        
        <title>Formulari i Regjistrimit</title>
        <style>
          #RegForm{
          margin-left: 15px;
          }
          form, .content {
        width: 80%;
        margin:  auto;
        padding: 20px;
        background: white;
        border-radius: 0px 0px 10px 10px;
        }
          .input-group {
        margin: 10px 0px 10px 0px;
          
        }
        .input-group label {
        display: block;
        text-align: left;
        margin: 3px;
        }
        .input-group input {
        height: 30px;
        width: 93%;
        padding: 5px 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid gray;
        }
        .btn{
        padding: 10px;
        font-size: 15px;
        color: white;
        background: #55aad5;
        border: none;
        border-radius: 5px;
          margin-top: -10px;
        } 
        .select{
            width: 100%;
            margin-top: 20px;
        }
        .select .option{
          width: 100%;
        padding: 10px;
        font-size: 15px;
        color: #000;
        border: solid 1px gray;
        border-radius: 5px;
        margin-bottom: 20px;
        }
              </style>
    </head>
    <body>
    <form method="post" id="RegForm">
        <div class="input-group">
           <label>Username</label>
           <input type="text" name="username"placeholder="Username">
         </div>
        <div class="input-group">
      <label>Email</label>
         <input type="email" name="email" placeholder="Email">
          </div>
       <div class="input-group">
        <label>Password</label>
          <input type="password" name="password_1" placeholder="Password" >
         </div>
           <div class="select"  >
          <Select class="option" name="select1" >
              <option value="">Select</option>
              <option value="user" name='user'>User</option>
               <option value="admin" name='admin'>Admin</option>
             </Select>  
              <div class="input-group">
                <button type="submit" class="btn" name="edit">Ruaj</button>
         </div>
</div>
  </form>
    </body>
</htm>