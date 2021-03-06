---
layout: page
title: Subscribe_result
---
<img src="/assets/images/follow_icon.png" alt="Follow icon">

<?php
  // Check script started by a form
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //identifiants mysql
    $host = "localhost";
    $username = "DB_ADMIN";
    $password = "DB_@DMIN_P@SS!";
    $database = "BLOG";
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];

    if (!isset($first_name)){
      die("S'il vous plaît entrez votre prénom/Please enter your first name");
    }
    if (!isset($last_name)){
      die("S'il vous plaît entrez votre nom/Please enter your last name");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      die("S'il vous plaît entrez votre adresse e-mail/Please enter your email address");
    }
    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);

    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }

    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO subscribers (first_name, last_name, email) VALUES(?, ?, ?)");
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('sss', $first_name, $last_name, $email);

    if($statement->execute()){
      echo "<p>Merci pour votre intérêt pour nos périgrinations nord-américaines ! :) </p>";
      echo "<p><i>Thanks for your interest in our North-American adventures! :) </i></p>";
    }
    else {
      print $mysqli->error;
    }
  }
?>
