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
<div class="jumbotron text-center" style="margin-bottom:0; background-image: url(images/worldnews4.png); background-repeat: no-repeat;background-size: 1400px 270px; background-position: center;" >
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

      <li class="nav-item active"> <a class="nav-link" href="#" style="color: navy; font-weight: bold;">A LA UNE <span class="sr-only">(current)</span></a> </li>

      <!--- ARTICLE --->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: navy; font-weight: bold;"> ARTICLES  </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(255,255,255);">
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
  <li class="nav-item active"> <a class="nav-link" href="#" style="color: navy; font-weight: bold;">VIDEOS <span class="sr-only">(current)</span></a> </li>

       <!--- BIBLIOTHEQUE --->
       <li class="nav-item active"> <a class="nav-link" href="monsiteperso/NewsBiblio.php" style="color: navy; font-weight: bold;">BIBLIOTHEQUE <span class="sr-only">(current)</span></a> </li>

      <!--- CONTACT --->


       <li class="nav-item active"> <a class="nav-link" href="CONTACTE.php" style="color: navy; font-weight: bold;">CONTACT <span class="sr-only">(current)</span></a> </li> 
  
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
              $reponse = $bdd->query('SELECT titre FROM articles where id_titre_article = "2" ');
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

            $reponse = $bdd->query('SELECT titre FROM articles where id_titre_article = "4" ');

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

        $reponse = $bdd->query('SELECT titre FROM articles where id_titre_article = "3"');

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
    <div class="col-sm-7">
      <!---------------------------------------------------------------LA PREMIERE PATIE D'ARTICLES-------------------------------------------------------------->
    <div class="row">
    <div class="col-sm-12">
      <h2>AFRIQUE</h2>
      <h5>Dec 7, 2017</h5>
      <div class="row" >
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px;
          height: 210px;width: 100%; border-radius: 5px; background: url('images/01.png') no-repeat; position: relative;
          box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
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

        $reponse = $bdd->query('SELECT titre FROM articles where id_titre_article = "1"');

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
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/02.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
              Eva Joly balance tout sur la Françafrique
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row" >
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/03.jpeg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
              Algérie: La détermination des foules et les défis futurs
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/04.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
              Le rôle de l’Union européenne dans la répression au Soudan
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="reglebis">

                  <!----------------------------------------------------------------------------------------------------------------------------->

    <!---------------------------------------------------------------LA DEUXIEME PATIE D'ARTICLES--------------------------------------------------------------><div class="col-sm-12">
      <h2>AMERIQUE</h2>
      <h5>Dec 7, 2017</h5>
      <div class="row" >
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/11.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
              La « mort cérébrale » de l‘OTAN
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/12.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
              Les nouveaux « Black Codes »
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row" >
        <div class="col-sm-6">
            <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/13.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
              <div id="banniere_description" style="font-weight: bold;">
                Accord de Paris: l’arbre Trump cache la forêt de l’inertie politique
                <span class="portfolio-icon-wraper">
                  <a href="#"><i class='fas fa-eye'></i></i></a>
                </span>
              </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/14.jfif') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
              <div id="banniere_description" style="font-weight: bold;">
                Amérique Latine en Résistance: Jusqu’à la victoire, toujours!
                <span class="portfolio-icon-wraper">
                  <a href="#"><i class='fas fa-eye'></i></i></a>
                </span>
              </div>
            </div>
        </div>
      </div>
    </div>
    <hr class="reglebis">

                <!----------------------------------------------------------------------------------------------------------------------------->

    <!--------------------------------------------------------------------------LASIE---------------------------------------------------------------------->
    <div class="col-sm-12">
      <h2>ASIE</h2>
      <h5>Dec 7, 2017</h5>
      <div class="row" >
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/21.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
              Des néonazis ukrainiens parmi les manifestants à Hong Kong
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/22.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
              La présidence du nouvel « homme fort » du Sri Lanka et les craintes de l’Occident
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row" >
        <div class="col-sm-6">
            <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/23.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
              <div id="banniere_description" style="font-weight: bold;">
                La chine va faire trembler le monde : des paysans à l’intelligence artificielle
                <span class="portfolio-icon-wraper">
                  <a href="#"><i class='fas fa-eye'></i></i></a>
                </span>
              </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/24.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
              <div id="banniere_description" style="font-weight: bold;">
                Retrait inévitable : l’accord entre les États-Unis et les Talibans
                <span class="portfolio-icon-wraper">
                  <a href="#"><i class='fas fa-eye'></i></i></a>
                </span>
              </div>
            </div>
        </div>
      </div>
    </div>
    <hr class="reglebis">
                 <!----------------------------------------------------------------------------------------------------------------------------->


    <!---------------------------------------------------------------LA DEUXIEME PATIE D'ARTICLES-------------------------------------------------------------->
    <div class="col-sm-12">
      <h2>EUROP</h2>
      <h5>Dec 7, 2017</h5>
      <div class="row" >
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/31.png') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
              Opération Macron: la fulgurante ascension médiatique décortiquée
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/32.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
            <div id="banniere_description" style="font-weight: bold;">
              50 ans de piazza Fontana. Le terrorisme fasciste au service des élites
              <span class="portfolio-icon-wraper">
                <a href="#"><i class='fas fa-eye'></i></i></a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row" >
        <div class="col-sm-6">
            <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/33.png') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
              <div id="banniere_description" style="font-weight: bold;">
                Les «gilets jaunes», objet politique non identifié
                <span class="portfolio-icon-wraper">
                  <a href="#"><i class='fas fa-eye'></i></i></a>
                </span>
              </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="fakeimg" style="margin-top: 15px; height: 210px;width: 100%; border-radius: 5px; background: url('images/34.jpg') no-repeat; position: relative; box-shadow: 0px 4px 4px #1c1a19; margin-bottom: 25px;">
              <div id="banniere_description" style="font-weight: bold;">
                La précarité tue, le capitalisme tue, le macronisme tue
                <span class="portfolio-icon-wraper">
                  <a href="#"><i class='fas fa-eye'></i></i></a>
                </span>
              </div>
            </div>
        </div>
      </div>
    </div>
    <hr class="reglebis">
              <!----------------------------------------------------------------------------------------------------------------------------->
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