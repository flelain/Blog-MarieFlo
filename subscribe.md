---
title: Subscribe
layout: page
---

![Profile Image]({{ site.url }}/{{ site.picture }})
<br>
<p>Si vous souhaitez être averti de la publication d'un nouveau billet sur le blog, laissez-nous vos nom/prénom et adresse email ci-dessous !</p>
<p><i> If you wish to be notified as soon as we publish a new post, please leave your first/last names and email address below!</i></p>
<br>

<form method="post" action="">
  <b>Prénom/First name</b> : <input type="text" size="20" name="first_name" />
  <br />
  <b>Nom/Last name</b> : <input type="text" size="20" name="last_name" />
  <br />
  <b>Email</b> : <input type="email" size="20" name="email" />
  <br />
  <input type="submit" value="Submit">
</form>

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

---
<h2>About this site</h2>
<p>This is a personal website, tailored to share our family adventures in Canada as well as professional-oriented projects. The site creation and maintenance overtime is in itself one of these projects, involving the five of us, especially in the content production!</p>

<p>Many thanks to <a href="https://github.com/sergiokopplin/">Sergio Kopplin</a> and its minimalist <a href="https://github.com/sergiokopplin/indigo">Indigo Template</a> with which I quickly set up this website and learnt a lot in the same time!

To know more about this site and what it is made of, please go to <a href="https://github.com/flelain">my github</a>.
