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
<div class="jumbotron text-center" style="margin-bottom:0; background-image: url(images/worldnews4.png); background-repeat: no-repeat; background-size: 1400px 270px; background-position: center;">
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
  <li class="nav-item active"> <a class="nav-link" href="#" style="color: navy; font-weight: bold;">VIDEOS <span class="sr-only">(current)</span></a> </li>

       <!--- BIBLIOTHEQUE --->
       <li class="nav-item active"> <a class="nav-link" href="monsiteperso/NewsBiblio.php" style="color: navy; font-weight: bold;">BIBLIOTHEQUE <span class="sr-only">(current)</span></a> </li>

      <!--- CONTACT --->


       <li class="nav-item active"> <a class="nav-link" href="#" style="color: navy; font-weight: bold;">CONTACT <span class="sr-only">(current)</span></a> </li> 
  
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
    <div class="col-sm-4">
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
    <div class="col-sm-8">

      <!--------------LE TITRE DE L'ARTICLE------------------>
      <h4 style="">
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
      </h4>

      <!--------------LA DATE DE PUBLICATION DE L'ARTICLE------------------>
      <h5>
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
              $reponse = $bdd->query('SELECT date_pub FROM articles where titre = "Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération" ');
              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
                {
                  ?>
                  <p style=" color: red">
                    <strong>D.P :</strong> 
                    <?php echo $donnees['date_pub']; ?><br/>
                    </p>
                    <?php
                  }
                  $reponse->closeCursor(); // Termine le traitement de la requête
              ?>

              <!--------------L'AUTEUR DE L'ARTICLE------------------>
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
              $reponse = $bdd->query('SELECT A.nom_auteur, A.pn_auteur from auteurs A INNER JOIN titre_articles_auteur TA on A.id_auteur = TA.id_auteur INNER join articles AR on TA.id_article = AR.id_titre_article where AR.titre = "Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération" ');
              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
                {
                  ?>
                  <p style="color: blue;">
                    <strong>N.A :</strong> 
                    <?php echo   $donnees['nom_auteur']; ?> <?php echo $donnees['pn_auteur']; ?>
                    </p>
                    <?php
                  }
                  $reponse->closeCursor(); // Termine le traitement de la requête
              ?>
      </h5>
      <!--------------L'IMAGE DE L'ARTICLE------------------>
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
              $reponse = $bdd->query('SELECT lienimage_article from articles where id_titre_article = "2" ');
              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
                {
                  ?>
                  <p style="color: blue;">
                    <img src="<?php echo $donnees ['lienimage_article'];?>"style="height: 310px; width: 100%; border-radius: 5px; margin-bottom: 20px;"/>
                    
                    <?php
                  }
                  $reponse->closeCursor(); // Termine le traitement de la requête
?>

      <!--------------LE RESUME DE L'ARTICLE------------------>
      <h6 style="text-align: justify; font-size: 18px;">
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
              $reponse = $bdd->query('SELECT résumé FROM articles where titre = "Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération" ');
              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
                {
                  ?>
                  <p>
                    <?php echo $donnees['résumé']; ?><br/>
                    </p>
                    <?php
                  }
                  $reponse->closeCursor(); // Termine le traitement de la requête
              ?>
      </h6>

      <!--------------LE RESUME DE L'ARTICLE------------------>
      <p style="text-align: justify; font-size: 16px;">

        Cela a beaucoup à voir avec la mesure dans laquelle les projets de libération en Afrique du Sud et au Zimbabwe menaçaient ou ne menaçaient pas les intérêts économiques blancs et occidentaux : à peine dans l’Afrique du Sud de Mandela et considérablement dans le Zimbabwe de Mugabe.<br/><br/>

        Le récit propagé par les médias était que Mandela était bon parce qu’il était un « démocrate » et que Mugabe était mauvais parce qu’il était un « autocrate ». Mais grattez la surface et les intérêts économiques de l’élite blanche et occidentale apparaissent.<br/><br/>

        En Afrique du Sud, la propriété foncière continue d’être dominée par la minorité blanche, exactement comme sous l’apartheid. La redistribution des terres s’est faite à un rythme extrêmement lent. Au Zimbabwe, en revanche, les terres des colons blancs et de leurs descendants ont été redistribuées à la majorité noire. L’économie de l’Afrique du Sud est blanche et dominée par les Occidentaux. Sous Mugabe, le Zimbabwe a pris des mesures pour avancer vers une économie autochtone, plaçant le contrôle de la majorité des richesses naturelles et des actifs productifs du pays dans les mains de sa population indigène. <br/><br/>
        Le rôle central des intérêts économique dans la diabolisation occidentale de Mugabe a été révélé dans les plaintes concernant son plan d’indigéniser les compagnies minières possédées par les Occidentaux, un processus qui obligerait quelques riches investisseurs en Occident à renoncer à une participation majoritaire dans l’exploitation des ressources minières du Zimbabwe. Il était impensable pour les médias occidentaux qu’un gouvernement africain donne à son peuple une participation à sa propre économie.<br/><br/>

        Mandela, en revanche, a rejeté les appels à nationaliser les mines d’Afrique du Sud, acceptant la domination occidentale et blanche sur l’économie du pays comme un principe fondamental d’une saine gestion économique.<br/><br/>

        En 2013, The Financial Times a rendu hommage au dirigeant sud-africain pour son rôle de « régisseur fiable de la plus grande économie de l’Afrique sub-saharienne, qui a adopté des politiques fiscales et monétaires orthodoxes ». Autrement dit, Mandela assurait que le flux des profits issus des mines et de l’agriculture sud-africaine dans les coffres des investisseurs étrangers et de l’élite commerciale blanche ne soit pas interrompu par la mise en œuvre du programme de justice économique de l’ANC, qui appelait à la nationalisation des mines et à la redistribution des terres. Nationalisation et redistribution des terres deviendraient l’unique projet de Mugabe. <br/> <br/>

        À un moment donné, cependant, Mugabe aussi a été un héros de la libération nationale approuvé par l’Occident, dans les jours où il a partagé la prédilection de Mandela pour une politique fiscale et monétaire orthodoxe, c’est-à-dire en faisant passer les intérêts commerciaux occidentaux avant ceux du peuple qu’il était censé représenter. <br/><br/>

        Mais l’histoire d’amour de l’Occident avec Mugabe a pris fin brutalement lorsque le président zimbabwéen a changé de cap et s’est lancé dans un programme de réforme agraire accéléré. Le dédain de l’Occident à son égard a encore crû lorsqu’il a lancé un programme d’indigénisation visant à placer le contrôle de la plus grande partie des ressources minières du pays dans les mains de Zimbabwéens autochtones.<br/><br/>

        Par conséquent, la transition de Mugabe de « bon » héros de la libération à « mauvais », de saint à démon, a coïncidé avec son passage de « régisseur fiable » de l’économie du Zimbabwe (c’est-dire régisseur fiable des intérêts des investisseurs étrangers et des colons blancs) à promoteur des intérêts économiques autochtones. Alors qu’il s’apprêtait à donner un sens réel au projet de libération du pays, accordant aux Zimbabwéens la souveraineté politique et économique, l’Occident a répondu par des sanctions destinées à affamer le pays pour le forcer à faire marche arrière. « Lorsqu’une puissance coloniale et impérialiste est forcée de donner l’indépendance à un peuple », remarquait Frantz Fanon, « la puissance impérialiste dit : “Vous voulez l’indépendance ? Alors prenez-la et mourez de faim”. »<br/><br/>

        Alors que la guerre économique de l’Occident plongeait le Zimbabwe dans le chaos, les journalistes occidentaux attribuaient les difficultés économiques du pays à ce qu’ils appelaient « la mauvaise gestion » de Mugabe, passant sous silence le Zimbabwe Democracy and Economic Recovery Act [la loi sur le rétablissement de la démocratie et le redressement de l’économie au Zimbabwe] de Washington, qui bloquait l’aide financière des institutions internationales à Hahare, un obstacle majeur au développement économique du pays. C’est comme si la destruction quasi-totale de l’économie de l’URSS après la Seconde Guerre mondiale avait été imputée au socialisme plutôt qu’à la destruction causée par la guerre et l’invasion nazie. Là, les médias occidentaux ont suivi leur mode de faire habituel pour traiter des gouvernements du Tiers Monde favorables à leur indépendance, attribuant les difficultés économiques d’un pays sous sanctions à la mauvaise gestion et non aux sanctions qui les ont causées. La pratique est évidente aujourd’hui dans le cas du Venezuela, où la détresse économique de ce pays riche en pétrole est traitée dans les médias occidentaux avec un mépris appliqué pour la bombe atomique que Washington a fait exploser au milieu de Caracas sous la forme d’un programme de guerre économique.<br/><br/>

        Quant à la dichotomie démocrate versus autocrate, c’était un artifice propagandiste. C’est ce que les gouvernements et les médias occidentaux utilisent pour légitimer des dirigeants qui protègent et promeuvent les intérêts des entreprises occidentales et pour diaboliser les dirigeants (de Castro à Kim Jong-un et de Xi Jinping à Mugabe) qui protègent et promeuvent les intérêts et les besoins de développement de leur peuple.<br/><br/>

        On peut se demander si Mugabe a échoué à adapter le rythme de sa réforme agraire et de ses programmes d’indigénisation de l’économie pour prendre en compte le pouvoir des gouvernements occidentaux à s’y opposer, mais on ne peut pas mettre en doute le fait qu’il a été un véritable héros de la libération nationale, qui a reconnu qu’un pays dont l’économie est contrôlée par des étrangers et une minorité de colons n’est indépendant que de nom.<br/><br/>
      </p>

      <h5>  <?php
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
              $reponse = $bdd->query('SELECT nb_vus FROM articles where titre = "Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération" ');
              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
                {
                  ?>
                  <p>
                    <strong>Nombre de vus :</strong> 
                    <?php echo $donnees['nb_vus']; ?><br/>
                    </p>
                    <?php
                  }
                  $reponse->closeCursor(); // Termine le traitement de la requête
              ?>
            </h5>



   </div>   
  </div>
</div>
         <!----------------------------------------------------------------------------------------------------------------------------->




      <!----------------------------------------------------------LE FOOTEUR------------------------------------------------------------------->

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