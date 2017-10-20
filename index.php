<?php
$host_name = "192.168.99.100";
$database = "information_schema";
$user_name = "root";
$password = "esgi";

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
