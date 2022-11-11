<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>SESSION</title>
</head>
<body>
<html lang = "en">
   
   <head>
      <title>Tutorialspoint.com</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            "background-color:hsl(0, 100%, 0%);"
         }

         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #0000ff;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 15px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 15px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#0000ff;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 15px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #0000ff;
         }
      </style>
      
   </head>
   
   <body>
      
      <h2>Enter Username and Password By Danish Khan</h2> 
      <div class = "container form-signin">
         
         <?php
         
         $msg='';
         if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
          
{
         if($_POST['username'] =='danishkhan' && 
         $_POST['password'] == '03121135508'){

          $_SESSION['valid'] =true;

          $_SESSION['timeout']==time();
          $_SESSION['username']= 'danishkhan';

          echo 'Your username and passowrd are correct';

  }

 else{

  $msg='Wrong password';


 }}

?>
</div>
<div class = "container">
      
         <form class = "form-signin" role = "form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

          <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = danishkhan" 
               required autofocus></br>
            
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = try 03121135508" required>
            
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         
         </form>
         
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>
