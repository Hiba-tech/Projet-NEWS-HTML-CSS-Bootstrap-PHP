<?php
//pour que les variables de sessions soient utilisable
session_start();

    //variable qui nous connecte à notre base de donnée
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=membre', 'root', '');

    if(isset($_POST['formeconnexion']))
    {
      $mailconnect = htmlspecialchars($_POST['mail']);
      $mdpconnect = sha1($_POST['mot_de_passe']);
      if(!empty($mailconnect) AND !empty($mdpconnect))
      {
        //membre nom de la colonne à changer
        $requser = $bdd ->prepare("SELECT * FROM membre WHERE mail= ? AND mot_de_passe = ?");
        $requser ->execute(array($mailconnect, $mdpconnect));
        //compter le nombre des rangés qui ont les informations saisis par les utilisateurs
        $userexist = $requser ->rowCount();
        if($userexist == 1 )
        {
            $userinfo = $requser ->fetch();
            $_SESSION['id_utilisateur'] = $userinfo['id_utilisateur'];
            $_SESSION['mail'] = $userinfo['mail'];
            $_SESSION['nom_utilisateur'] = $userinfo['nom_utilisateur'];
           
            //la page s'appelle profil.php
            header("Location: profil.php?id=".$_SESSION['id_utilisateur']);
        }
        else
        {
            $erreur = "Mauvais mail ou mot de passe !";
        }
      }
      else
      {
          $erreur = "Tous les champs doivent être remplis !";
      }
    }
   
?>




<!DOCTYPE html>
<html lang="FR">
    
<head>
    <title>My Awesome Login Page</title>
     <meta charset="utf-8">
    <!----Responsif--->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!----LIEN FICHIER CSS---->
    <link href="seconnecter.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="images/worldnews3.jpg" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">


                    <form method="POST" action="">


                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <!---Mailconnect--->
                            <input type="email" name="mail" class="form-control input_user" value="" placeholder="exemple@mail.com">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>

                            <!---Motdepasse--->
                            <input type="password" name="mot_de_passe" class="form-control input_pass" value="" placeholder="Mot de passe">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Rester connecté(e)</label>
                            </div>
                        </div>
                            <div class="d-flex justify-content-center mt-3 login_container">

                    <input type="submit" name="formeconnexion" class="btn login_btn" value="Se connecter !"  >

                   </div>


                    </form>


                </div>
                <br>
        
                    <?php
                            if(isset($erreur))
                    {
                        echo '<strong align="center">'.'<font color="red">'.$erreur."</font>".'</strong>';
                    }
                    ?>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Vous êtes pas inscrit ? <a href="S'enregistrerfinal.html" class="ml-2">S'inscrire</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="#">Mot de passe oublié ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
