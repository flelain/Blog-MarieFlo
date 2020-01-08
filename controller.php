<?php
  // Check script started by a form
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //identifiants mysql
    $host = "localhost";
    $username = "DB_ADMIN";
    $password = "DB_@DMIN_P@SS!";
    $database = "subscribers";
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
    $statement = $mysqli->prepare("INSERT INTO users (name, email) VALUES(?, ?)");
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('sss', $name, $email);

    if($statement->execute()){
      print "Salut " . $first_name . "!, votre adresse e-mail est ". $email;
    }
    else {
      print $mysqli->error;
    }
  }
?>
