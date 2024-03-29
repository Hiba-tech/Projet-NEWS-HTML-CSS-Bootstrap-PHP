
<!DOCTYPE html>
<html lang="FR">
<head>
    <title>Site</title>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
      <link rel="shortcut icon" href="image/favicone.jpg" type="image/jpg">
      <link rel="stylesheet" href ="style.css"/>
       <link rel="stylesheet" href ="dist/css/styleEtiquette.css"/>
      <link rel="stylesheet" href="dist/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src ="dist/js/jquery-3.4.1.min.js"></script>
      <script src ="dist/js/bootstrap.js"></script>
      <script src ="dist/js/main.js"></script>
</head>
<body>
      <!--Header -->
      <header>
        <div class="container">
          <div class="row">
            <!--logo-->
            <div class="col-md-2 col-xs-12">
              <div class="logo">
                <h2>News.Biblio</h2>
              </div>
           </div>
        <!--BOUTONS -->   
            <div id="utilisateur">
              <form
            <button type="button" class="btn btn-warning"style="width: 50px";><span class="fa fa-user" onClick='enregistrement.php'/> <span></button>
            </div>
          </form>
            <div id="coeur">
            <button type="button" class="btn btn-warning"style="width: 50px" ; ><span class="fa fa-heart"></span></button>
            </div>
            <div id="panier">
            <button type="button" class="btn btn-warning"style="width: 50px";><span class="fa fa-shopping-cart"></span></button>
            </div><!--BOUTONS -->  

            <!--Nav-->
       <nav class="navbar navbar-expand-xl bg-light  navbar-white">
          <!-- Links -->
          <ul class="navbar-nav">
             <!-- Dropdown Catégories -->
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"style="color: navy; font-weight: bold;" href="#" id="navbardrop" data-toggle="dropdown">Catégories</a>

        <div class="dropdown-menu">
        <a class="dropdown-item"style="color: navy; font-weight: bold;" href="#">Biographie</a>
        <a class="dropdown-item"style="color: navy; font-weight: bold;" href="#">Cuisine</a>
        <a class="dropdown-item" style="color: navy; font-weight: bold;"href="#">Marketing</a>
        <a class="dropdown-item"style="color: navy; font-weight: bold;" href="#">Culture générale</a>
        <a class="dropdown-item"style="color: navy; font-weight: bold;" href="#">Développement personnel</a>

        <a class="dropdown-item"style="color: navy; font-weight: bold;" href="#">Politique</a>
        <a class="dropdown-item"style="color: navy; font-weight: bold;" href="#">Roman</a>

        <a class="dropdown-item"style="color: navy; font-weight: bold;" href="#">Technologies</a>
        <a class="dropdown-item"style="color: navy; font-weight: bold;" href="#">Voyages</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: navy; font-weight: bold;" href="#">Nouveautés</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: navy; font-weight: bold;" href="#">Promotions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"style="color: navy; font-weight: bold;" href="#">Livres d'occasion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: navy; font-weight: bold;"href="#">Contact</a>
    </li>
  </ul>
</nav>         
</header>
      <!--fin Header -->
      <section class="sections home text-center">
        <div class="overlay">
          <div class="container">
           <div class="home-content">

              <h3 class="home-title">Notre sélection</h3>
            <p class=" home-desc">
              " Un livre bien choisi va vous sauver de quoi que ce soit<br> même de vous-même. "Daniel Pennac </p>
             <form class="form-inline">
    <form class="form-inline">
    <div class="input-group">
      <input type="" class="form-control" size="70" style="height: 40px;" placeholder="Taper votre recherche" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-warning"style="width: 130px; height:40px;"><span class="fa fa-search"></span>Chercher</button>
      </div>
    </div>
  </form>
       </div>
        </div>
        </div>
       </section>
       <!--FILTRES-->
    
          <div class="container">
           <hr class="regle">
          <div class="row">
          <div class="col-sm-3">
            <h5>Notre collection</h5>
            <hr>
            <input type="checkbox" name="">
            <a input type="checkbox"href="#top">Biographie</a> <br>
            <input type="checkbox" name="">
            <a input type="checkbox"href="#top">Cuisine</a> <br>
            <input type="checkbox" name="">
            <a input type="checkbox" href="#top">Marketing</a><br>
            <input type="checkbox" name="">
            <a input type="checkbox"href="#top">Culture générale</a><br>
            <input type="checkbox" name="">
            <a href="#top">Dévéloppement personnel</a><br>
            <input type="checkbox" name="">
            <a href="#top">Roman</a><br>
            <input type="checkbox" name="">
            <a href="LIVREPOLITIQUE.php">Politique</a><br>
            <input type="checkbox" name="">
            <a href="#top">Technologies</a><br>
            <input type="checkbox" name="">
            <a href="#top">Voyage</a><br>

            </div>

        
           <div class="col-sm-9">
            <section class=" galerieEtiquette">
               <div class="mask">
                 <img src="image/livre1.jpeg"alt="appàaimer" style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=7.99 € <br>catégorie: Dév.personnel</p>
              </div>
              <div class="mask">
                 <img src="image/livre2.jpg"alt="cuisine" style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=19.95 € <br>catégorie: Cuisine</p>
              </div>
           
              <div class="mask">
                 <img src="image/livre3.jpg"alt="adultere"style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=7.5 € <br>catégorie:Roman</p>
              </div>
                 <div class="mask">
                 <img src="image/livre4.jpg"alt="politiques"style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=22.95 € <br>catégorie: Politique</p>
              </div>
                 <div class="mask">
                 <img src="image/livre5.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=18 € <br>catégorie: Marketing</p>
              </div>

              <div class="mask">
                 <img src="image/livre6.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=7.65 € <br>catégorie:Biographie </p>
              </div>
              <div class="mask">
                 <img src="image/livre7.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=20 € <br>catégorie: Politique</p>
              </div>
                <div class="mask">
                 <img src="image/livre8.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=20 € <br>catégorie: Histoire</p>
              </div>
              <div class="mask">
                 <img src="image/livre9.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=20 € <br>catégorie: Politique</p>
              </div>
              <div class="mask">
                 <img src="image/livre10.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=20 € <br>catégorie: Politique</p>
              </div>
              <div class="mask">
                 <img src="image/livre11.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=20 € <br>catégorie: Politique</p>
              </div>
              <div class="mask">
                 <img src="image/livre12.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=20 € <br>catégorie: Politique</p>
              </div>
              <div class="mask">
                 <img src="image/livre13.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=20 € <br>catégorie: Politique</p>
              </div>
              <div class="mask">
                 <img src="image/livre14.jpg"alt=""style="width:150px;height:200px">
                 <p class="etiquette" style="width:155px ; height:100px ; margin-left: -5px;"> Prix=20 € <br>catégorie: Politique</p>
              </div>
                </div>
              </div>
            </section>
       
        <!--PAGINATION------------------>
       <div class="form-row justify-content-center">

           <nav>
        <ul class="pagination" style="">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
      </nav>
    </div>
                <!--FIN PAGINATION------------------>
</div>
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
