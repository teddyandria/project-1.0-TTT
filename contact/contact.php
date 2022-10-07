<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $errors[] = "Le format du prénom est non valide";
  } else {
    $name = test_input($_POST["fname"]);
  }
  if (empty($_POST["lname"])) {
    $errors[] = "Le format du nom est non valide";
  } else {
    $lname = test_input($_POST["lname"]);
  }
  if (empty($_POST["email"])) {
    $errors[] = "Adresse email non valide";
  } else {
    $email = filter_var($_POST["email"]);
  }
  if (!empty($_POST["textarea"])) {
    $errors[] = "Un message est requis";
  } else {
    $textarea = test_input($_POST["textarea"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="contactStyles.css" />
  <title>Contact</title>
  <link rel="shortcut icon" href="../Images/logoTitle.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
  <nav class="navbar dark-mode" role="navigation">
        <div class="navbar__logo"> <img class="Logo" src="../Images/logo2.png" alt="Logo" /></div>
        <ul class="navbar__links">
            <li class="navbar__link first"><a href="../accueil/index.html">Accueil</a></li>
            <li class="navbar__link second"><a href="../cv/cv.html">Expérience</a></li>
            <li class="navbar__link third"><a href="../contact/contact.php">Contact</a></li>
        </ul>
        <button class="burger">
            <span class="bar"></span>
            <script src="script.js"></script>
        </button>
    </nav>
  </header>



  <h1>Contactez-moi pour plus de détails !</h1>



  <form action="" method="POST">

      
     <?php if (!empty($errors)) { ?>
      <ul class = "msgError">
        <?php foreach ($errors as $error) { ?>
      <li> <?php echo $error; ?></li>
      <?php } ?>
     </ul>
   <?php } ?>
    
     <label for="fname" name="fname">Prénom : </label>
    <input type="text" name="fname" id="fname" placeholder="Naruto" required value="<?= $_POST['fname'] ?>">
    <label for="lname" name="lname">Nom de famille : </label>
    <input type="text" name="lname" id="lname" placeholder="Uzumaki" required>
    <label for="email" name="email">Adresse e-mail : </label>
    <input type="email" name="email" id="email" placeholder="nom@exemple.com" required>
    <label for="textarea" name="textarea">Message : </label>
    <textarea class="textarea" rows="5" required></textarea>
    <button class="btnSend">Envoyer</button>

  </form>



  <div class="footerproject">Projet N°1, Wild Code School 2022</div>

</body>

</html>