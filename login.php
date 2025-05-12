<?php
session_start();
if(isset($_SESSION['user'])){
  // header("location: index.php");
}
$username="123";
$passeword="123";
$error="";
if(isset($_post["login"])){
  if(isset($_POST["username"])&& isset($_POST["password"])){
  extract($_POST);
  if(!empty($username)&& !empty($password)){}
  if($username= $input_username && $password = $input_password){
    $_SESSION["user"] =  $username;
    header("location: index.php");
    var_dump($_SESSION);

  }else{
      $error="informations de connexion incorrectes";
    }
  }else{
    $error= "merci de bien vouloir entrer tous les champs";
  }
}   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="login.php" method="post">
  <input type="text" name="username" placeholder="entrez votre nom"/>
  <br><br>
  <input type="password" name="password" placeholder="mot de passe"/>
  <br><br>
  <input type="submit" name="login" value="connexion"/>
  </form>
  <p style= color:red><?php echo $error;?></p>
</body>
</html>
