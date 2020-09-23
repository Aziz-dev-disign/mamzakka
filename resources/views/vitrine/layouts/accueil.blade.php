<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mam Zakka</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon2.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v2.1.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Debut de la section Chercher une propriété ======= -->
  <div class="click-closed"></div>
  <!--/ Formulaire de recherhe /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Rechercher une propriété</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Propriété</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="nom de l'Propriété">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>Tout les Propriétés</option>
                <option>Terrain</option>
                <option>Mainson en vente</option>
                <option>Maison à louer</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Ville</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>Toute les villes</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Meublée">Meublée</label>
              <select class="form-control form-control-lg form-control-a" id="Meublée">
                <option>Aucun</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="chambres">chambres</label>
              <select class="form-control form-control-lg form-control-a" id="chambres">
                <option>Aucun</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Douches">Douches</label>
              <select class="form-control form-control-lg form-control-a" id="Douches">
                <option>Aucun</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="prix">Prix minimale</label>
              <select class="form-control form-control-lg form-control-a" id="prix">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Rechercher</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- Fin de la sectuon recherche de proprété -->

  <!-- ======= Entete/Barre de menu ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="accueil">Mam<span class="color-b">Zakka</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="accueil">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="a-propos">Apropos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Propriétés</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav><!-- Fin de la section barre de menu -->

  @yield('contenu')

    <!-- ======= Footer ======= -->
<section class="section-footer">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="widget-a">
            <div class="w-header-a">
                <h3 class="w-title-a text-brand">MamZakka</h3>
            </div>
            <div class="w-body-a">
                <p class="w-text-a color-text-a">
                Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                sed aute irure.
                </p>
            </div>
            <div class="w-footer-a">
                <ul class="list-unstyled">
                <li class="color-a">
                    <span class="color-text-a">Phone .</span> contact@mamzakka.com</li>
                <li class="color-a">
                    <span class="color-text-a">Email .</span> (00226) 70 18 08 74/55 99 56 26</li>
                </ul>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
            <div class="w-header-a">
                <h3 class="w-title-a text-brand">La Compagnie</h3>
            </div>
            <div class="w-body-a">
                <div class="w-body-a">
                <ul class="list-unstyled">
                    <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                    </li>
                    <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                    </li>
                    <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                    </li>
                    <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                    </li>
                    <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                    </li>
                    <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
            <div class="w-header-a">
                <h3 class="w-title-a text-brand">A l'international</h3>
            </div>
            <div class="w-body-a">
                <ul class="list-unstyled">
                <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                </li>
                <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">China</a>
                </li>
                <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <footer>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <nav class="nav-footer">
            <ul class="list-inline">
                <li class="list-inline-item">
                <a href="#">Accueil</a>
                </li>
                <li class="list-inline-item">
                <a href="#">A propos</a>
                </li>
                <li class="list-inline-item">
                <a href="#">Proprété</a>
                </li>
                <li class="list-inline-item">
                <a href="#">Blog</a>
                </li>
                <li class="list-inline-item">
                <a href="#">Contact</a>
                </li>
            </ul>
            </nav>
            <div class="socials-a">
            <ul class="list-inline">
                <li class="list-inline-item">
                <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
                </li>
            </ul>
            </div>
            <div class="copyright-footer">
            <p class="copyright color-text-a">
                &copy; Copyright
                <span class="color-a">MamZakka</span> Tout Droit Reserver.
            </p>
            </div>
        </div>
        </div>
    </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Fichiers Js -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    </body>
    
</html>