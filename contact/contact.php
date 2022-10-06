

<?php
 if(isset($_POST['fname']))
 {
  echo "bonjours" . $_POST['lname'] . "!";
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
    <link
      href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div>
            <ul>
                <img class="Logo" src="../Images/logo2.png" alt="Logo" />
                <li><a href="../accueil/index.html">Accueil </a></li>
                <li><a href="../cv/cv.html">Expérience</a></li>
                <li><a href="../contact/contact.php">Contact</a></li>
                <img src="../Images/menu-btn.png" alt="hamburger" class="brgbuton">
            </ul>
        </div>
    </nav>
    </header>

  
 
    <h1>Contactez moi pour plus de détails !</h1>

  

    <form action="" method="POST">
         <label for="fname" name="fname">Prénom : </label>
          <input type="text" name="fname" id="fname" placeholder="Sasuke" required>
          <label for="lname" name="lname">Nom de famille : </label>
          <input type="text" name="lname" id="lname" placeholder="Uchiwa" required>          
          <label for="email" name="email">Adresse e-mail : </label>
          <input type="email" name="emain" id="email"  placeholder="nom@exemple.com" required>
          <label for="textarea"  name="textarea">Message : </label>
          <textarea class="textarea" rows="5"required></textarea>
          <button class="btnSend">Envoyez</button>
        
</form>
      

      <div class="footerproject">Projet N°1, Wild Code School 2022</div>

  </body>
</html>
