<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AMZ Pharmacie</title>
    <link rel="stylesheet" href="{{asset('zz/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('zz/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('zz/css/style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
    <script src="{{asset('zz/js/modernizr.js')}}"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- ====================================================
    header section -->
    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 header-logo">
                    <br>
                    <a href="/"><img src="{{asset('zz/img/ph.jpg')}}" alt="" class="img-responsive logo" height="20%" width="20%"></a>
                </div>

                <div class="col-md-7">
                    <nav class="navbar navbar-default">
                      <div class="container-fluid nav-bar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          
                          <ul class="nav navbar-nav navbar-right">
                            <li><a class="menu active" href="#home" >Acceuil</a></li>
                            <li><a class="menu" href="#about">A propos</a></li>
                            <li><a class="menu" href="#service">Nos services </a></li>
                            <li><a class="menu" href="#team"> Médicaments</a></li>
                            <li><a class="menu" href="#contact"> contactez-nous</a></li>
                            <li><a class="menu" href="{{url('login')}}"> Espace personnel</a></li>
                          </ul>
                        </div><!-- /navbar-collapse -->
                      </div><!-- / .container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header> <!-- end of header area -->

    <section class="slider" id="home">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="header-backup"></div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{asset('zz/img/a3.jpg')}}" alt="" width="100%">
                            <div class="carousel-caption">
                                <h1>Pharmacie</h1>
                                <p>Mansourah</p>
                                <a href="#about"><button>En savoir plus</button></a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('zz/img/a1.jpg')}}" alt="">
                                                    </div>
                        
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section><!-- end of slider section -->

    <!-- about section -->
    <section class="about text-center" id="about">
        <div class="container">
            <div class="row">
                <h2>A propos de nous</h2>
                <h4>Nous disposons de tout ce que vous aurez besoin pour le bien-etre de vous et de votre famille</h4>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail clearfix">
                        <div class="about-img">
                            <img class="img-responsive" src="{{asset('zz/img/b.jpg')}}" alt="" width="100%">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>C</h1>
                            </div>
                            <h3>Espace bébé</h3>
                            <p>Notre pharmacie prend soin des bébés et des mamans en leur réservant un espace bébé pour le soin et l’hygiène, pour l’alimentation infantile et pour les articles de puériculture. La pharmacie sélectionne les meilleures marques de biberons, tétines, liniments oléo-calcaires, anneaux de dentition, chauffe-biberon etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="{{asset('zz/img/m.jpg')}}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>W</h1>
                            </div>

                            <h3>Médicaments naturels</h3>
                            <p>On appelle remède naturel ou remède de grand-mère une préparation élaborée à des fins médicinales à partir de produits naturels</p>
                        </div>
                    </div>
                </div>
                 
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="{{asset('zz/img/item3.jpg')}}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>M</h1>
                            </div>
                            <h3>Espace conseil</h3>
                            <p>Nos pharmaciens vous informent sur la bonne utilisation des médicaments, des génériques et des vaccins.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of about section -->


    <!-- service section starts here -->
    <section class="service text-center" id="service">
        <div class="container">
            <div class="row">
                <h2>Nos services</h2>
                <h4>Nous offrons des services de hautes qualités</h4>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="heart img-responsive" src="{{asset('zz/img/p.png')}}" alt="" width="70%">
                            </div>
                        </div>
                        <h3>Poids et de taille</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="brain img-responsive" src="{{asset('zz/img/service1.png')}}" alt="">
                            </div>
                        </div>
                        <h3>Fréquence cardiaque</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="knee img-responsive" src="{{asset('zz/img/pp.jpg')}}" alt="" width="60%">
                            </div>
                        </div>
                        <h3>Prise de piqures</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="bone img-responsive" src="{{asset('zz/img/t.jpg')}}" alt="" width="70%">
                            </div>
                        </div>
                        <h3>Prise de tension</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of service section -->


    <!-- team section -->
    <section class="team" id="team">
        <div class="container">
            <div class="row">
                <div class="team-heading text-center">
                    <h2>Médicaments</h2>
                    
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{asset('zz/img/d.jpg')}}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Doliprane</h3>
                        <p>1000 MG poudre, disponible </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Smecta</h3>
                        <p>3G 30 sachet, pas disponible</p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{asset('zz/img/s.jpg')}}" alt="member-2">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{asset('zz/img/g.jpg')}}" alt="member-3">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Gripex</h3>
                        <p>24 gellules 50MG/4MG, disponible  </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Rhumafed</h3>
                        <p>2.5MG, disponible </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{asset('zz/img/r.jpg')}}" alt="member-4">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{asset('zz/img/z.png')}}" alt="member-5">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Zostine</h3>
                        <p>Pellilule, 40MG, disponible </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Efferalgan</h3>
                        <p>8 comprimés, 1G, pas disponible </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="{{asset('zz/img/e.jpg')}}" alt="member-5">
                    </div>
                </div>
                <div class="team-heading text-center"><a href="za"><button>Liste médicaments</button></a></div>
                
            </div>
        </div>
    </section>

    <!-- end of team section -->

    <!-- map section -->
    <div class="api-map" id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 map" id="map"></div>
            </div>
        </div>
    </div><!-- end of map section -->

    <!-- contact section starts here -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="contact-caption clearfix">
                    <div class="contact-heading text-center">
                        <h2>Contactez nous</h2>
                    </div>
                    <div class="col-md-5 contact-info text-left">
                        <h3>Contact information</h3>
                        <div class="info-detail">
                            <ul><li><i class="fa fa-calendar"></i><span>Samedi - Jeudi:</span> 9:00 - 22:00 PM</li></ul>
                            <ul><li><i class="fa fa-map-marker"></i><span>Adresse:</span>Imama , Mansourah, Tlemcen</li></ul>
                            <ul><li><i class="fa fa-phone"></i><span>Téléphone:</span> 043-21-13-13</li></ul>
                            <ul><li><i class="fa fa-envelope"></i><span>Email:</span> pharmacie-mansourah@gmail.com</li></ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1 contact-form">
                        <h3>Laissez-nous un message</h3>

                        <form class="form">
                            <input class="name" type="text" placeholder="Nom">
                            <input class="email" type="email" placeholder="Email">
                            <input class="phone" type="text" placeholder="Téléphone:">
                            <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <input class="submit-btn" type="submit" value="Envoyer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of contact section -->

    <!-- footer starts here -->
    <footer class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 footer-para">
                    <p>&copy;AMZ 2019 All right reserved</p>
                </div>
                <div class="col-xs-6 text-right">
                    <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                    <a href="http://www.facebook.com"><i class="fa fa-skype"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- script tags
    ============================================================= -->
    <script src="{{asset('zz/js/jquery-2.1.1.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('zz/js/gmaps.js')}}"></script>
    <script src="{{asset('zz/js/smoothscroll.js')}}"></script>
    <script src="{{asset('zz/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('zz/js/custom.js')}}"></script>
</body>
</html>