<?php
 include('bd.php');
 $user = [];
 try{
	$connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $req = $connection->query("select * from user");
 var_dump($req->fetchAll());
 $users=$req->fetchAll(PDO::FETCH_ASSOC);
 } catch (PDOException $e){
	echo "<pre>";
	var_dump($e);
	echo "</pre>";
    die("stop");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
  <table class="table table-striped">
    <tr>
      <th>Prenom</th>
      <th>Nom</th>
      <th>Email</th>
      <th>Telephone</th>
    </tr> 
    <?php
    foreach($users as $value){
      echo"
      <tr>
      <td>".$value['nom']."</td>
      <td>".$value['prenom']."</td>
      <td>".$value['Email']."</td>
      <td>".$value['Tel']."</td>
      </tr>
      ";
    }
	?>

</table>
</body>
</html>
