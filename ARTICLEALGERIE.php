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
              $reponse = $bdd->query('SELECT titre FROM articles where titre = "Algérie: La détermination des foules et les défis futurs" ');
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
              $reponse = $bdd->query('SELECT date_pub FROM articles where titre = "Algérie: La détermination des foules et les défis futurs" ');
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
              $reponse = $bdd->query('SELECT A.nom_auteur, A.pn_auteur from auteurs A INNER JOIN titre_articles_auteur TA on A.id_auteur = TA.id_auteur INNER join articles AR on TA.id_article = AR.id_titre_article where AR.titre = "Algérie: La détermination des foules et les défis futurs" ');
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
              $reponse = $bdd->query('SELECT lienimage_article from articles where id_titre_article = "3" ');
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
              $reponse = $bdd->query('SELECT résumé FROM articles where titre = "Algérie: La détermination des foules et les défis futurs" ');
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

        Rome, 9 juillet 2019, Nena News- Vendredi 5 juillet, en Algérie a eu lieu la vingtième manifestation du mouvement populaire contre tout le système politique. La manifestation a eu lieu exactement le jour du 57ème anniversaire de la libération de l’Algérie des 132 années du colonialisme français (5 juillet 1962). Si dans les dernières semaines la participation aux manifestations du vendredi avait baissé légèrement, le 5 juillet les rues des plus grandes villes algériennes se sont à nouveau remplies massivement. Malgré cette nouvelle et imposante manifestation non violente du hirak, la situation est en train d’évoluer et le mouvement semble être à un carrefour.<br/><br/>

        Pendant les premières semaines de manifestations, le conflit opposait d’un côté la rue qui réunissait des partis d’opposition, des travailleurs, des syndicats, des associations étudiantes et féministes et citoyens autour d’une revendication radicale et claire : « système dégage ! » De l’autre côté le régime politique  avec à la tête Abdelaziz Bouteflika totalement délégitimé. Après que le chef d’état major et général Ahmed Gaid Salah s’est révélé être la vraie tête du régime et après quatre mois de protestations ininterrompues, les dynamiques politico-sociales ont changé.<br/><br/>

        Le régime révèle de plus en plus son vrai caractère : si au début des protestations il répondait encore à certaines revendications (destitution du président Bouteflika, annulation des élections d’avril 2019 et opération «mains propres »  contre des entrepreneurs et des politiques corrompus), depuis au moins deux mois la répression augmente contre les politiciens d’opposition de longue date (par exemple Louisa Hanoune du parti des travailleurs), contre des militants historiques de la guerre de libération qui se sont exprimés aujourd’hui en faveur du mouvement,  contre le parti unique FLN,  contre le régime militaire (justement quelques jours auparavant du 57ème anniversaire Lakhdar Bouregaâ, mujahedin historique a été arrêté) et contre des journalistes et des jeunes militants du mouvement actuel. <br/><br/>


        Depuis désormais trois semaines, la police bloque les rues les plus importantes de la capitale Alger pour empêcher les manifestants de défiler comme les vendredis précédents. Vendredi passé justement la manifestation a été brutalement réprimée à certains endroits du cortège. Les images qui circulent sur les réseaux sociaux montrent les charges violentes de la police contre des militants pacifiques et sans défense. Beaucoup de gens déclarent avoir reçu des blessures graves (jambes cassées, blessures aux yeux et à la tête). La Direction générale de la Sécurité Nationale (DGSN) a annoncé l’ouverture d’une enquête grâce aux vidéos des accrochages avec la police, mais au sein du mouvement populaire peu de gens croient à une probable condamnation des principaux responsables des violences.<br/><br/>

        La question qui se pose immédiatement est donc : cette escalade de la répression et des violences indique-t-elle un tournant dans la gestion du mouvement de la part du régime ? Est-ce-que nous nous trouvons devant un scénario égyptien et soudanais ? Thomas Serres, chercheur et expert des politiques nord-africaines et de la zone méditerranéenne dans une interview au quotidien français indépendant Médiapart répond :<br/><br/>

        « Je ne le crois vraiment pas, pour différentes raisons. En premier lieu l’Algérie a déjà connu sa décennie noire (guerre civile entre forces islamistes et le gouvernement/l’armée entre 1988 et 1999), et la plupart des opposants et du régime refuse l’usage de la violence. Les manifestants sont toujours pacifiques et  leur comportement n’a jamais légitimé l’usage de la violence à leur encontre. Le régime repose sur des dispositifs policiers qui suivent le modèle français de la « gestion démocratique des foules ». En deuxième lieu, l’armée algérienne n’entend pas exercer directement le pouvoir.  Les officiers de l’ANP (armée nationale populaire) revendiquent certainement un droit de contrôle (de la gestion politique et des institutions publiques), mais il n’est pas question que Gaid Salah, ou un autre général, devienne président. In fine, et cela est essentiel, les gouvernements des Emirats et de l’Arabie Saoudite soutiennent activement les armées égyptienne et soudanaise et le maréchal Haftar en Lybie. Heureusement  pour l’Algérie, elle est encore relativement loin du Golfe. » <br/> <br/>

        Bien qu’il ne soit pas possible de comparer la situation algérienne à la situation égyptienne ou soudanaise, la répression et les violences contre le mouvement augmentent, ce qui changera la dynamique du mouvement dans les semaines qui viennent. Il demeure néanmoins difficile de prévoir les conséquences politiques et sociales de ce changement. <br/><br/>

        Pour ce qui concerne l’opposition, les initiatives populaires pour trouver une marche à suivre alternative à celle proposée par Gaid Salah, qui permette une réelle transition démocratique, demeurent faibles pour le moment et doivent affronter trois grosses difficultés : avant tout, la faiblesse organisationnelle des oppositions, souvent divisées en leur sein et qui ne convergent pas entre elles ; ensuite l’absence de personnalités connues par les gens, en mesure de constituer une réelle alternative politique qui s’opposerait d’une façon organisée au régime ; enfin, le manque d’un réel consensus sur les premiers pas à faire pour s’acheminer vers une réelle transition démocratique : si les uns avancent l’impossibilité d’organiser une élection présidentielle dans le cadre de l’actuelle constitution et la nécessité d’une assemblée constituante indépendante du pouvoir en place, les autres poussent pour organiser de nouvelles élections afin de choisir un nouveau président qui organisera cette transition.<br/><br/>

        Le 15 juin a eu lieu une première rencontre officielle de la Conférence de la Société Civile pour discuter comment organiser la feuille de route. Les différences entre les forces politiques engagées dans cette rencontre sont encore très marquées. En effet, certaines organisations et associations ont quitté cette Conférence et n’ont pas participé à la deuxième rencontre qui a eu lieu samedi 6 juillet c’est-à-dire le lendemain de la 20ème manifestation. Aujourd’hui il y a trois blocs clairement identifiables qui chacun de leur côté, ont un projet de transition. Il s’agit de la Conférence de la Société Civile, de l’Alternative Démocratique et du Forum du Dialogue National. Le seul point de convergence est la conviction que tout le système politique doit être renversé et que les vieux représentants doivent laisser la place aux nouvelles forces politiques et sociales, ce qui est décidemment insuffisant vu les divisions auxquelles  le mouvement  est confronté en ce moment.<br/><br/>

        Vu la persévérance et la détermination du mouvement populaire, un compromis avec le régime n’est plus possible. Donner une nouvelle  structure  à l’opposition politique et la mettre à l’unisson avec les revendications sociales du mouvement politique afin qu’une vraie alternative puisse être imposée au régime, voilà les défis pour les semaines à venir. Mais le régime n’entend pas reculer d’un pas et les divisions et les différences idéologiques au sein du mouvement populaire demeurent importantes. De plus, le 9 juillet arrivent à échéance les quatre-vingt jours du gouvernement provisoire dirigé par le président Abdelkader Bensalah et par le premier ministre Nourredine Bedoui.<br/><br/>

         Pour le moment, le futur  de l’Algérie apparaît décidemment incertain. Nena News..<br/><br/>

        *Maurizio Coppola, journaliste et militant du mouvement  « Pouvoir au peuple » pour lequel il suit les affaires algériennes<br/><br/>
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
            <a href="#!"  style="color: navy; font-weight: bold;">Téléphone: 07 07 06 05 00</a>
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