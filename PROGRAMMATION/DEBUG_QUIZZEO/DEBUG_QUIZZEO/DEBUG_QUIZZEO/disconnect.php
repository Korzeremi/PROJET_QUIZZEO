<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DECONNEXION</title>
</head>
<?php
    session_start();
    session_destroy();
    header('location: homepage.php');
?>
</html>