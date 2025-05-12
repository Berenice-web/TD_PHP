<?php
include('database.php');
if(isset($_POSTs['register'])){
  extract($_POST);
  $password = sha1($password);
  try{
  $req = $connection->query("INSERT INTO user(nom,prenom,telephone;email)VALUES ('$nom','$prenom','$telephone','$email')");
  $connection->exec($req);
     } catch (PDOException $e) {
   echo "une erreur est survenue. Reessayez ulterieurement";
     }
echo "inscription reussie";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <h1>INSCRIPTION</h1>
<form action="register.php" method="post">
  <input type="text" name="nom" placeholder="nom"/>
  <br><br>
  <input type="text" name="prenom" placeholder="prenom"/>
  <br><br>
  <input type="text" name="telephone" placeholder="telephone"/>
  <br><br>
  <input type="text" name="email" placeholder="email"/>
  <br><br>
  <input type="submit" name="register" value="connexion"/>
  </form>  
</body>
</html>