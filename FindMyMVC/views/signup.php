
<?php include_once '../views/decoupage/header.php' ;?>
<?php $form= \app\core\form\Form :: begin('','POST') ?>

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
                    <li class="nav-item "><a class="nav-link text-warning" href="/login">connexion</a></li>
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
                                <h1 class="text-warning fs-1 ">s'inscrire </h1>
                                <p class="mb-4"> vous avez perdu votre objet !! ne vous inquiétez pas FindMy peut vous aider</p>
                            </div>
                            <form action="#" method="post">
                                <div class="form-group first">
                                     <?php echo $form -> field($model,'username') ?> 
                                </div>
                                <div class="form-group last mb-4">
                                    <?php echo $form -> field($model,'user_password') -> passwordField() ?>
                                </div>
                                <div class="form-group last mb-4">
                                    <?php echo $form -> field($model,'confirmPassword') -> passwordField()?>
                                </div>
                                <input type="submit" value="sign up " class="btn text-white btn-block btn-warning" name="submit">
                            </form>
                        </div>
                    

                </div>
            </div>
            </div>
    </main>

    <?php include_once '../views/decoupage/footer.php' ;?>
    <script src="fontawesome-v6/js/all.min.js"></script>   

</body>

</html>