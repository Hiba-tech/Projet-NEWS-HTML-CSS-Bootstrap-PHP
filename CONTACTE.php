<!DOCTYPE html>
<html lang="FR">
<head>
  <title>WORLD NEWS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--lien vers notre fichier css-->
  <link href="Style.css" rel="stylesheet">
  <!--icone-->
  <link rel="shortcut icon" href="images/favicone.jpg" type="image/jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0; background-image: url(images/worldnews4.png); background-repeat: no-repeat; background-size: 1350px 270px; background-position: center;" >
    <br><br><br><br>
</div>


        <!---------------------------------------------------------------LA BARE DU MENU-------------------------------------------------------------->
  <!---BARE DE MENU --->
  <!---BARE DE MENU --->
  <nav class="navbar navbar-expand-sm  navbar-dark" style="background-color: #EAB60A;">
  <a class="navbar-brand" href="#" style="color: white; font-weight: bold;" >WORLD NEWS</a>
  <!-- bouton une fois responsif -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav nav-pills col-6" role="tablist" >

      <!---A LA UNE--->

      <li class="nav-item active"> <a class="nav-link" href="A_LA_UNE.php" style="color: navy; font-weight: bold;">A LA UNE <span class="sr-only">(current)</span></a> </li>

      <!--- ARTICLE --->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: navy; font-weight: bold;"> ARTICLES  </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" style="color: navy; font-weight: bold;">International </a>
          <a class="dropdown-item" href="#" style="color: navy; font-weight: bold;">Politique</a>
          <a class="dropdown-item" href="#" style="color: navy; font-weight: bold;">Societé</a>
          <a class="dropdown-item" href="#" style="color: navy; font-weight: bold;">Sport</a>
          <a class="dropdown-item" href="#"style="color: navy; font-weight: bold;">Santé</a>
          <a class="dropdown-item" href="#"style="color: navy; font-weight: bold;">Développement personnel</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: navy; font-weight: bold;">Autres</a>
        </div>
      </li>
             <!--- VIDEOS --->
      <li class="nav-item active"> <a class="nav-link" href="#" style="color: navy; font-weight: bold;">VIDEOS <span class="sr-only">(current)</span></a> 
      </li>

       <!--- BIBLIOTHEQUE --->
      <li class="nav-item active"> <a class="nav-link" href="monsiteperso/NewsBiblio.php" style="color: navy; font-weight: bold;">BIBLIOTHEQUE <span class="sr-only">(current)</span></a></li>

      <!--- CONTACT --->
      <li class="nav-item active"> <a class="nav-link" href="CONTACTE.php" style="color: navy; font-weight: bold;">CONTACT <span class="sr-only">(current)</span></a> 
      </li> 
  
    </ul>

    <!---SEARCH---->
    <h1 class="col-3"></h1>
      <input class="form-control col-3" type="search" placeholder="Search" aria-label="Search">

  </div>
</nav>
<!---FIN NAVBAR ---->
   <br> 
              <!---------------------------------------------------------------LE CORPS DE LA PAGE------------------------------------------------------------>

<div class="container" style="margin-top:30px;">
  <div class="row">
              <!---------------------------------------------------------------LA PARTIE A GAUCHE-------------------------------------------------------------->
    <!------------------LA PARTIE INSCRIPTION----------------------->
    <div class="col-sm-5">
      <div id="inscri" class="row text-center">
      <div class="col-sm-12">
      <button type="submit" class="btn btn-primary"><a href="monsiteperso/enregistrement.php" style="text-decoration: none; color: rgb(255,255,255);">Inscription</a></button></br>
      <button type="submit" class="btn btn-primary"><a href="WorldNews_Projet/seconnecter.php" style="text-decoration: none; color: rgb(255,255,255);">Connexion </a></button></br>
      </div>
      </div>

      <hr class="regle">

      <!------------------LA PARTIE ARTICLES LES PLUS LUS ----------------------->
      <div class="row">
        <div class="col-sm-12">
          <h3 class="lalpl">Les articles les plus lus</h3>
          <ol class="olart">
            <li class="liart"><a class="titreart" href="ARTICLEROBERT.php">
              <?php
              try
              {
              // Sous WAMP (Windows)
                $bdd = new PDO('mysql:host=localhost;dbname=bibliothèque2.0;charset=utf8', 'root', '');
              }
              catch(Exception $e)
              {
              // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
              }

              // Si tout va bien, on peut continuer
              // On récupère tout le contenu de la table jeux_video
              $reponse = $bdd->query('SELECT titre FROM articles where titre = "Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération" ');
              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
                {
                  ?>
                  <p>
                    <?php echo $donnees['titre']; ?><br/>
                    </p>
                    <?php
                  }
                  $reponse->closeCursor(); // Termine le traitement de la requête
              ?>
            </a>
          </li>
            <hr/>
          <li class="liart"><a class="titreart" href="#">
            <?php
            try
            {
            // Sous WAMP (Windows)
              $bdd = new PDO('mysql:host=localhost;dbname=bibliothèque2.0;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
            // En cas d'erreur, on affiche un message et on arrête tout
              die('Erreur : '.$e->getMessage());
            }

            // Si tout va bien, on peut continuer
            // On récupère tout le contenu de la table jeux_video

            $reponse = $bdd->query('SELECT titre FROM articles where titre = "Que sont allés chercher les Cubains en Afrique ?" ');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
              {
            ?>
            <p>
              <?php echo $donnees['titre']; ?><br/>
              </p>
              <?php
            }

            $reponse->closeCursor(); // Termine le traitement de la requête
          ?>
        </a>
      </li>
      <hr/>
      <li class="liart"><a class="titreart" href="ARTICLEALGERIE.php">
        <?php
        try
        {
        // Sous WAMP (Windows)
          $bdd = new PDO('mysql:host=localhost;dbname=bibliothèque2.0;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
        // En cas d'erreur, on affiche un message et on arrête tout

          die('Erreur : '.$e->getMessage());
        }
        // Si tout va bien, on peut continuer
        // On récupère tout le contenu de la table jeux_video

        $reponse = $bdd->query('SELECT titre FROM articles where titre = "Algérie: La détermination des foules et les défis futurs"');

        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch())
          {
            ?>
            <p>
              <?php echo $donnees['titre']; ?><br/>
              </p>
              <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>
          </a>
        </li>
      <hr/>
    </ol>
  </div>
</div>

<hr class="regle">

      <!------------------LA PARTIE ARTICLES DU MOIS ----------------------->

      <div class="row">
        <div class="col-sm-12">
          <h3 class="ladm">Les articles du mois</h3>
          <ol class="olart">
            <li class="liart"><a class="titreart" href="#">"Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération"</a></li>
            <hr/>
            <li class="liart"><a class="titreart" href="#">"Que sont allés chercher les Cubains en Afrique ?"</a></li>
            <hr/>
            <li class="liart"><a class="titreart" href="#">"Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération"</a></li>
            <hr/>
          </ol>
        </div>
      </div>
      <hr class="regle">

      <!------------------ATTENTION MEDIA ----------------------->

      <div id="cadre" class="row text-center">
      <div class="col-sm-12">
        <div class="fakeimgAM">
          <a href="#"><img class="imageAM" src="images/top.jpg"></a>
            <div id="banniere_descriptionH">
              ATTENTION MEDIAS
            </div>
          </div>
      </div>
      </div>
      <hr class="regle">


      <!------------------L'AUTRE HISTOIRE ----------------------->

      <div id="cadre" class="row text-center">
      <div class="col-sm-12">
        <div class="fakeimgAM">
          <a href="#"><img class="imageAM" src="images/autre-histoire-bannière.jpg"></a>
            <div id="banniere_descriptionH">
              L'AUTRE HISTOIRE
            </div>
          </div>
      </div>
      </div>
      <hr class="regle">

      <!------------------LA RUBRIQUE DU DIMANCHE----------------------->

      <div id="cadre" class="row text-center">
      <div class="col-sm-12">
        <div class="fakeimgAM">
          <a href="#"><img class="imageAM" src="images/journal-afrique.jpg"></a>
            <div id="banniere_descriptionH">
              LE JOURNAL DE L'AFRIQUE
            </div>
          </div>
      </div>
      </div>
      <hr class="regle">


       <!------------------LA RUBRIQUE DE SAÏD BOUAMAMA----------------------->

      <div id="cadre" class="row text-center">
      <div class="col-sm-12">
        <div class="fakeimgAM">
          <a href="#"><img class="imageAM" src="images/bannière-diabo-catégorie.jpg"></a>
            <div id="banniere_descriptionH">
              DIABOLISATION
            </div>
          </div>
      </div>
      </div>
      <hr class="regle">


      <!------------------LA RUBRIQUE DE SAÏD BOUAMAMA----------------------->

      <div id="cadre" class="row text-center">
      <div class="col-sm-12">
        <div class="fakeimgAM">
          <a href="#"><img class="imageAM" src="images/said-bannire.jpg"></a>
            <div id="banniere_descriptionH">
              LA RUBRIQUE DE SAÏD BOUAMAMA
            </div>
          </div>
      </div>
      </div>
      <hr>
    </div>

          <!---------------------------------------------------------------LA PATIE D'ARTICLES-------------------------------------------------------------->
    <div class="col-sm-7" style="background-color: rgb(192,192,192);">
      <!---------------------------------------------------------------LA PREMIERE PATIE D'ARTICLES-------------------------------------------------------------->
       <div class="row">
    <div class="col-sm-12">
 <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4" style="color:navy;">Contactez-nous !</h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5">
    Avez-vous des questions? N'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous en quelques heures pour vous aider.
  </p>
    <div class="row">
      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5" style="margin-left: auto; margin-right: auto;">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="name" name="name" class="form-control">
                  <label for="name" class="">Votre name</label>
              </div>
            </div>
            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="email" name="email" class="form-control">
                  <label for="email" class="">Votre email</label>
              </div>
            </div>
          <!--Grid column-->
          </div>
          <!--Grid row-->
          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="">Sujet</label>
              </div>
            </div>
          </div>
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12">
              <div class="md-form">
                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" style="height: 200px;"></textarea>
                  <label for="message">Votre message</label>
              </div>
            </div>
          </div>
          <!--Grid row-->
        </form>
        <div class="text-center text">
          <a class="btn btn-warning" style="color: navy;font-weight: bold;"onclick="document.getElementById('contact-form').submit();">Envoyer</a>
        </div>
        <div class="status"></div>
        </div>
        <!--Grid column-->
      </div>
      <br>
      <br>
      <div class="form-row justify-content-center">
        <div class="col-md-3 text-center">
          <i class="fa fa-map-marker mt-4 fa-2x" style="color: navy"></i>
            <p>Avenue Monge, 37200 Tours, France</p>           
                <i class="fa fa-phone mt-4 fa-2x"style="color: navy"></i>
                  <p>+33  07 06 05 04 </p>
                <i class="fa fa-envelope mt-4 fa-2x"style="color: navy"></i>
                  <p>news@gmail.com</p>  
        </div>    
        </div>
      </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
    

   




</div>
    </div>
  </div>
</div>
         <!----------------------------------------------------------------------------------------------------------------------------->


      <!----------------------------------------------------------LE FOOTEUR------------------------------------------------------------------->

<!----FOOTER---->
<footer id="footer class="page-footer font-small stylish-color-dark pt-4" style="margin-bottom:0; background-color: #EAB60A;>
<hr>
  <!-- Footer Links -->
  <div class=" text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto" >

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4"> Nous contacter</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!"  style="color: navy; font-weight: bold;">Téléphone: 07 07 06 05 0</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Mail : news@gmail.com</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Adresse:Avenue Monge, 37200 Tours, France</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Rubriques du site -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Rubriques du site</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!"  style="color: navy; font-weight: bold;";">International</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Politique</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Société</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Sport</a>
          </li>
        </ul>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- 2-Mentions légales -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Mentions légales</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Charte du Groupe</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Politique de confidentialité</a>
          </li>
          <li>
            <a href="#!"s style="color: navy; font-weight: bold;">Gestion des cookies</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Aide (FAQ)</a>
          </li>
        </ul>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- 3-Nous contacter -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Nous contacter</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Facebook</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Youtube</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Twitter</a>
          </li>
          <li>
            <a href="#!" style="color: navy; font-weight: bold;">Fil RSS</a>
          </li>
        </ul>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
  <!-- Copyright -->
  <hr color=white width="50%">
  <div class="footer-copyright text-center py-3">© 2020 Copyright: WorldNews
  </div>
  <!-- Fin Copyright -->
</footer>
<!----FOOTER---->
</body>
</html>