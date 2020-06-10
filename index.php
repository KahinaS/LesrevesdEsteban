<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LesrêvesdEsteban</title>
  
 

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
    <div class="bg-color">
      <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
              <a class="navbar-brand" href="#">Les rêves d'Esteban</a>
            </div>
            <div class="collapse navbar-collapse" id="lauraMenu">
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li class="active"><a href="#main-header">Accueil</a></li>
                <li><a href="ateliers.php">Ateliers</a></li>
                <li><a href="temoignages.php">Témoignages</a></li>
                <li><a href="temoignages.php">Réservations</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- <li><a href="view/inscription.php"><button type="button" class="btn btn-danger ">S'inscrire</button></a></li>
                <li><a href="view/connexion.php"><button type="button" class="btn btn-danger">Se Connecter</button></a></li> -->
               </ul>
          
         
               
          </div>
        </nav>
      </header>
      <div class="wrapper">
        
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
              <img class="" src="img/logo.png">
                <h2><span>Bienvenue dans la ferme pédagogique et thérapeutique</span></h2>
                
              </div>
              <div class="overlay-detail text-center">
                <a href="#about"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section id="about" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-right">
         
        </div>
        <div class="col-md-6 text-left">
          <div class="pic">
            
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center"><span class="deco">Activités</span> </h2>
        </div>
        <div class="col-md-12">
          <div id="myGrid" class="grid-padding ">
            <div class="col-md-4 col-sm-4 padding-right-zero">
            <img src="img/2.jpg" class="img-responsive">
            
            <img src="img/4.jpg" class="img-responsive">
              
            </div>
            <div class="col-md-4 col-sm-4 padding-right-zero">
            <img src="img/6.jpg" class="img-responsive">
            
            <img src="img/1.jpg" class="img-responsive">
            </div>
            <div class="col-md-4 col-sm-4 padding-right-zero">
             
              <img src="img/5.jpg" class="img-responsive">
              
             </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="contact" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-sec text-center">
            <h2>Nous envoyer un<span class="deco"> Message</span> </h2>
            <p>Si vous avez une question, veuillez remplir le formulaire ci-dessous.</p>
          </div>
        </div>

        <div class="col-md-8 col-md-push-2">
          <div id="sendmessage">Votre message est bien envoyé ! Merci</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" id="contactform">
          <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Adresse Mail</label>
                    <input class="form-control" id="email" type="email" placeholder="Adresse mail"
                        required="required"
                        data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
          <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Numéro de téléphone</label>
                    <input class="form-control" id="phone" type="tel" placeholder="Numero de téléphone"
                        required="required"
                        data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Message"
                        required="required"
                        data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>

            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Envoyer</button></div>
          </form>
        </div>

      </div>
    </div>
  </section>
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <!--end row-->
      <div class="row">
        <div class="col-md-6">
          <div class="footer">
          7 Avenue St Martin de Fontenay
          <br>33380 Biganos

          <br>06 59 15 83 91
           <br>association.lesrevesdesteban@gmail.com

           
          </div>
        </div>
        <div class="col-md-6 text-right">
          <ul class="social-list">
            <li>
              <a href="#"><img src="img/instagram.png"></a>
            </li>
            <li>
              <a href="#"><img src="img/twitter.png"></a>
            </li>
            <li>
              <a href="#"><img src="img/facebook.png"></a>
            </li>
            
          </ul>
        </div>

      </div>
     
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
