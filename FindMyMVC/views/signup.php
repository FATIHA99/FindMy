<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logos/search1.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/logos/search1.png" />

    <title>connexion</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark  fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <h4 class="text-warning">
                    <img src="assets/img/logos/search1.png  " alt="..." />FindMy</h4>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav  ms-auto py-4 py-lg-0">
                    <li class="nav-item "><a class="nav-link text-warning" href="login.html">connexion</a></li>


                </ul>
            </div>
        </div>
    </nav>

    <main class="content">
      
            <div class="row">
              
            <?php include_once '../views/decoupage/svgLogin.php' ;?>
            <div class="col-md-6 contents p-4">
                    <div class="row justify-content-center">
                        <div class="col-md-10 pt-5  ">
                            <div class="mb-4">
                                <h1 class="text-warning fs-1 ">  Page de connexion </h1>
                                <p class="mb-4"> vous avez perdu votre objet !! ne vous inquiétez pas FindMy peut vous aider</p>
                            </div>
                            <form action="#" method="post">
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">

                                </div>

                                <div class="form-group last mb-4">
                                    <label for="password">Password verify</label>
                                    <input type="password" class="form-control" id="passwordV">

                                </div>


                                <input type="submit" value="sign up " class="btn text-white btn-block btn-warning">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            </div>
     
    </main>


    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <div class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </div>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>FindMy
                    </h6>
                    <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </p>   
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4"> Liens utiles  </h6>
                    <p><a href="#!" class="text-reset">Pricing</a> </p>
                    <p><a href="#!" class="text-reset">Settings</a>  </p>
                    <p><a href="#!" class="text-reset">Orders</a>  </p>
                    <p> <a href="#!" class="text-reset">Help</a>  </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">  Contacter -nous </h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope me-3"></i> info@example.com</p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">FindMy.com</a>
    </div>
</footer>
    <script src="js/bootstrap.min.js"></script>
        <!-- pour les icon de footer  -->

    <script src="fontawesome-v6/js/all.min.js"></script>   

</body>

</html>