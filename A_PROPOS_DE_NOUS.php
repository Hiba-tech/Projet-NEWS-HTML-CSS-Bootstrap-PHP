<!DOCTYPE html>
<html lang="FR">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!--lien vers notre fichier css-->
  <link href="Style0.css" rel="stylesheet">
  <!--icone-->
  <link rel="shortcut icon" href="images/favicone.jpg" type="image/jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0; background-image: url(images/monde.png); background-repeat: no-repeat; background-size: 500px; background-size: cover;" >
    <h1> WORLD NEWS</h1>
    <p>Forgez vous votre propre opinion </p>
</div>


        <!---------------------------------------------------------------LA BARE DU MENU-------------------------------------------------------------->
<nav class="navbar navbar-expand-sm  navbar-dark">
  <a class="navbar-brand" href="#">WORLD NEWS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav nav-pills col-9" role="tablist" >
      <li class="nav-item" >
        <a class="nav-link " data-toggle="pill" href="#ALAUNE">A LA UNE</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-toggle="pill" href="#APROPO">A PROPOS DE NOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-toggle="pill" href="#NOSARTICLES">NOS ARTICLES D'ANALYSES</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link " data-toggle="pill" href="#NOSVIDEOS">NOS VIDEOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-toggle="pill" href="#NOTRELIB">NOTRE LIBRAIRIE</a>
      </li>   
    </ul>
    <input class="form-control col-3" id="myInput" type="text" placeholder="Rechercher"  style=" background-color: rgba(255,255,255,0.5);">
  </div>   
</nav>
<!-- Tab panes -->
  <div class="tab-content">
    <div id="ALAUNE" class="container tab-pane fade"><br>
      <h3 class="titreh3">A LA UNE</h3> 
    </div>
    <div id="APROPO" class="container tab-pane fade"><br>
      <h3 class="titreh3">A PROPOS DE NOS</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="NOSARTICLES" class="container tab-pane fade"><br>
      <div class="conteneurel">
      <h3 class="titreh3">NOS ARTICLES D'ANALYSES</h3>
        <a charset="el" href="#">Afrique</a>
        <a charset="el" href="#">Amérique</a>
      
      
        <a charset="el" href="#">Asie</a>
        <a charset="el" href="#">Europe</a>

        </br>
    
        <a charset="el" href="#">Culture</a>
        <a charset="el" href="#">Démoctratie</a>

        <a charset="el" href="#">Culture</a>
        <a charset="el" href="#">Démoctratie</a>
        </div>
    </div>
    <div id="NOSVIDEOS" class="container tab-pane fade"><br>
      <h3 class="titreh3">NOS VIDEOS</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="NOTRELIB" class="container tab-pane fade"><br>
      <h3 class="titreh3">NOTRE LIBRAIRIE</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>

              <!---------------------------------------------------------------LE CORPS DE LA PAGE------------------------------------------------------------>

<div class="container" style="margin-top:30px;">
  <div class="row">
              <!---------------------------------------------------------------LA PARTIE A GAUCHE-------------------------------------------------------------->
    <!------------------LA PARTIE INSCRIPTION----------------------->
    <div class="col-sm-5">
      <div id="inscri" class="row text-center">
      <div class="col-sm-12">
      <button type="submit" class="btn btn-primary">Inscription</button></br>
      <button type="submit" class="btn btn-primary">Connexion</button></br>
      </div>
      </div>

      <hr class="regle">

      <!------------------LA PARTIE ARTICLES LES PLUS LUS ----------------------->
      <div class="row">
        <div class="col-sm-12">
          <h3 class="lalpl">Les articles les plus lus</h3>
          <ol class="olart">
            <li class="liart"><a class="titreart" href="#">"Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération"</a></li>
            <hr/>
            <li class="liart"><a class="titreart" href="#">"Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération"</a></li>
            <hr/>
            <li class="liart"><a class="titreart" href="#">"Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération"</a></li>
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
            <li class="liart"><a class="titreart" href="#">"Robert Mugabe: le héros de la libération nationale diabolisé pour avoir essayé de donner un sens à la libération"</a></li>
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
          <a href="#"><img class="imageAM" src="images/autre-histoire-bannière.jpg"></a>
            <div id="banniere_descriptionH">
              LA RUBRIQUE DU DIMANCHE
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
      <p>
        World News est un collectif fondé par Amina RHAIEM Hiba CHAMEKH en 2020. Il regroupe des journalistes, des écrivains, des vidéastes, des traducteurs, des graphistes et toute une série d’autres personnes qui travaillent au développement de l’info alternative. Parce qu’on ne peut laisser des médias dominés par la logique marchande monopoliser l’information sur les guerres, l’économie et les rapports Nord-Sud, Investig’Action milite pour donner la parole aux sans-voix.
      </p>
      <p>
      Notre site dénonce un système qui continue a faire passer les intérets des 1 % qui sont a l'origine des guerres. De plus, les médias dominants désinforment systématiquement sur ces conflits en appliquant les cinq principes de la propagande de guerre. Parce qu’ils sont la propriété des 1 %, parce qu’ils s’inscrivent dans une logique marchande, parce que les conditions de travail y sont incompatibles avec une info de qualité, les médias dominants relaient l’idéologie dominante et nous vendent des guerres « humanitaires ».
      </p>
       <p>
      Convaincu que la presse mainstream ne peut être réformée même si des journalistes courageux y font ce qu’ils peuvent, Michel décide de fonder Investig’Action avec l’idée que le rôle des citoyens est essentiel pour garantir le droit à l’info. Aujourd’hui, le collectif peut donc compter sur le soutien de centaines de bénévoles : journalistes professionnels, correspondants, capteurs de bonnes infos, traducteurs, diffuseurs, graphistes, écrivains, dessinateurs, correcteurs, étudiants, informaticiens…
      </p>
    </div>
    </div>
  </div>
</div>
         <!----------------------------------------------------------------------------------------------------------------------------->




      <!----------------------------------------------------------LE FOOTEUR------------------------------------------------------------------->

<div id="foot" class="jumbotron text-center  navbar-dark" style="margin-bottom:0" >
  <div class="row text-center">
    <div  class="col-4">
      <ul class="contacte">
        <h5>Nous contacter</h5>
        <li><a class="element" href="#">Facebook</a></li>
        <li><a class="element" href="#">Youtub</a></li>
        <li><a class="element" href="#">Twitter</a></li>
        <li><a class="element" href="#">Fils RSS</a></li>
      </ul>
    </div> 
    <div class="col-4">
      <ul class="montion-legale">
        <h5>Mentions légales</h5>
        <li><a class="element" href="#">Charte du groupe</a></li>
        <li><a class="element" href="#">Politique de confidentialité</a></li>
        <li><a class="element" href="#">Gestion des cookies</a></li>
      </ul>
    </div class="col-4">
    <div>
      <ul class="reaseax-sociaux">
        <h5>Suivez nous</h5>
        <li><a class="element" href="#">Facebook</a></li>
        <li><a class="element" href="#">Youtub</a></li>
        <li><a class="element" href="#">Twitter</a></li>
        <li><a class="element" href="#">Fils RSS</a></li>
      </ul>
    </div>
  </div>
</div>
</body>
</html>