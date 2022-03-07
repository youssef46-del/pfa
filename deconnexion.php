<?php 

session_start();
session_unset(); //pour détruire les var d'une sess
session_destroy(); //pour détruire completement une sess

header("location:connexion.php");



?>