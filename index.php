<?php
$host_name = "localhost";
$database = "information_schema";
$user_name = "root";
$password = "esgi";

echo "Bienvenue sur le projet PHP";

$connect = mysqli_connect($host_name, $user_name, $password, $database);

if(mysqli_connect_errno())
{
echo '<p>La connexion au serveur MySQL a échoué: '.mysqli_connect_error().'</p>';
}
else
{
echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
}
?>
