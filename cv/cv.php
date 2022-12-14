<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cv.styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

    <title>Curriculum Vitae</title>
</head>

<body>

    <nav class="navbar dark-mode" role="navigation">
        <div class="navbar__logo"> <img class="Logo" src="../Images/logo2.png" alt="Logo" /></div>
        <ul class="navbar__links">
            <li class="navbar__link first"><a href="../accueil/index.html">Accueil</a></li>
            <li class="navbar__link second"><a href="../cv/cv.php">Expérience</a></li>
            <li class="navbar__link third"><a href="../contact/contact.php">Contact</a></li>
        </ul>
        <button class="burger">
            <span class="bar"></span>
            <script src="script.js"></script>
        </button>
    </nav>

    <div class="container">

        <div class="wrapper">
            <article class="card">
                <h1 class="title">SASUKE UCHIHA</h1>
                <div>
                    <p> Dernier survivant du clan Uchiwa. Après que mon frère ainé Itachi ait massacré notre clan, je me suis donné pour mission dans la vie de les venger en tuant Itachi. Avec désormais 7 années d'expériences en tant que protecteur de l'ombre du village de Konoha. J'ai
                        developpé et mis en place des stratégies de defense qui ont permis maintenir la paix et la
                        sérenité au sein du village. Je souhaite mettre mes compétences de Ninja de
                        l'ombre chez vous afin d'améliorer la qualité de vie de vos villageois.</p>
                </div>
                <img src="" alt="">
            </article>
            <article class="card">
                <h1 class="title">Competences</h1>
                <div>
                    <p>Grâce à un entraînement continu, j'ai atteint l'apogée de ma puissance. J'ai developpé de
                        nombreux Jutsu :
                    </p>
                    <ul>
                        <li>
                            <label for="amaterasu">Amaterasu</label>
                            <progress id="amaterasu" max="100" value="90"> 90%</progress>
                        </li>
                        <li>
                            <label for="susano">Susano</label>
                            <progress id="susano" max="100" value="100"> 100%</progress>
                        </li>
                        <li>
                            <label for="katon">Katon</label>
                            <progress id="katon" max="100" value="100"> 90%</progress>
                        </li>
                        <li>
                            <label for="chibaku">Chibaku Tensei</label>
                            <progress id="chidori" max="100" value="80"> 90%</progress>
                        </li>
                    </ul>
                </div>
            </article>

            <article class="card">
                <div class="bubble">
                    <p>Mon reve pour l'avenir je préfère le garder pour moi. <br>
                        Dans l'immediat, j'ai plutot un objectif:
                        retablir l'honneur de ma famille et tuer une certaine personne. </p>
                </div>
            </article>

            <?php
            include 'array.php' ?>

            <article class="card">
                <h1 class="title">Experiences Professionelles</h1>

                <div class="bubbles">
                    <?php foreach ($data as $experience) { ?>

                        <div class="bubble">
                            <h2><?php echo $experience['date'] ?></h2>

                            <?php foreach ($experience['taches'] as $task) { ?>
                                <ul>
                                    <li><?php echo $task ?></li>
                                </ul>

                            <?php } ?>
                        </div>

                    <?php } ?>


                    <!-- <div class="bubble">
                        <h2>2010 - 2012 : Chef d'équipe - Akatsuki</h2>
                        <p>Management d'équipe.</p>
                        <p>Missions de reconnaissances.</p>
                    </div>
                    <div class="bubble">
                        <h2>2012 - 2015 : Fantassin - Freelance</h2>
                        <p>Differentes missions liées à la guerre.</p>
                        <p>Participation à la 4ème Grande Guerre Ninja en tant que fantassin en Freelance. Contribution
                            à l'assassinat du général ennemie.</p>
                    </div>
                    <div class="bubble">
                        <h2>2015- Aujourd'hui : Gardien de la paix - Konoha</h2>
                        <p>Protection du village de Konoha.</p>
                        <p>Responsable de la communication entre konoha et ses alliées.</p>

                    </div> -->
                </div>
            </article>

            <article class="card">
                <h1 class="title">Formations</h1>
                <div class="about-school">
                    <div class="school">
                        <h2>1999 - 2004 : Academie Ninja - Konoha </h2>
                        <p>Passage examen Genin. Obtention du bandeau de Ninja.</p>
                    </div>
                    <div class="school">
                        <h2>2004 - 2006 : Formation SVT - Repaire d'Orochimaru</h2>
                        <p>Experiences liées à la modification de gènes humaines.</p>
                        <p></p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</body>

</html>