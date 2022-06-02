
<?php include_once '../views/decoupage/header.php' ;?>
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
            <div class="row d-flex justify-content-center align-items-center  mb-5">
            <?php include_once '../views/decoupage/svgLogin.php' ;?>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-10 p-5  ">
                            <div class="mb-4">
                                <h1 class="text-warning fs-1 text-uppercase">  Page de connexion </h1>
                                <p class="mb-4"> vous avez perdu votre objet !! ne vous inquiétez pas FindMy peut vous aider</p>
                            </div>
                                    <?php $form= \app\core\form\Form :: begin('','POST') ?>
                                    <?php echo $form -> field($model,'username') ?> 
                                    <?php echo $form -> field($model,'user_password') -> passwordField() ?>
                                <div class="d-flex mb-5 align-items-center my-4">
                                   <input type="checkbox" checked="checked" class="me-4" />
                                    <span class="caption">Remember me</span>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>
                              <button type="submit"  class=" w-100 btn text-white btn-block btn-warning text-decoration-none pt-2  fw-bold"> connexion</button>
                                <?php $form= \app\core\form\Form :: end() ?>

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