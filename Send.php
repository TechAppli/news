
<?php
include('function.php');

$nom=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$to = $email;
$subject = "Validation inscription de ".$nom;
$tokens=random(20);
$message = "
<html>
<head>
<title>Tonga soa</title>
</head>
<body>
<p>Validation d'Inscription de ".$nom."</p>
<table>
<tr>
<th>Nom : ".$nom."</th>
<th>Votre Mot de Pass : ".$pass."</th>
</tr>

</table>
<a href='http://localhost/Mail/Confirm.php?id=".$tokens."'>Se connecter</a>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <Andrew.Manjakasoa@itu.mg>' . "\r\n";


add_user($nom,$email,$pass,$tokens);
mail($to,$subject,$message,$headers);
header('Location: Message.php');
?> 
