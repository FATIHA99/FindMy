<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/logos/search1.png" />
    <title>FindMy</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark  fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <h4 class="text-warning">  <img src="assets/img/logos/search1.png  " alt="..." />FindMy</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav  ms-auto py-4 py-lg-0">
                    <li class="nav-item "><a class="nav-link text-warning" href="/signup">inscrivez-vous</a></li>
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
                                <div class="form-group first my-5">
                                    <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur ">
                                </div>
                                <div class="form-group last mb-4 my-5">
                                    <input type="password" class="form-control" id="password" placeholder="mot de passe ">
                                </div>
                                <div class="d-flex mb-5 align-items-center">
                                   <input type="checkbox" checked="checked" class="me-4" />
                                    <span class="caption">Remember me</span>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>
                                <a href="pagePublic.html"  class="  btn text-white btn-block btn-warning text-decoration-none pt-2  fw-bold"> connexion</a>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
    
    </main>

    <?php include_once '../views/decoupage/footer.php' ;?>
    <script src="js/bootstrap.min.js"></script>
        <!-- pour les icon de footer  -->

    <script src="fontawesome-v6/js/all.min.js"></script>   

</body>

</html>