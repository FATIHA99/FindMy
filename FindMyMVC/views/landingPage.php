<?php include_once '../views/decoupage/header.php' ;?>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <h4 class="text-warning"> <img src="assets/img/logos/search1.png  " alt="..." />FindMy</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">a propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">nos équipe</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contacter-nous</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading "> <h1 class="text-white">Bienvenu a  FindMy!</h1> </div>
            <div class="masthead-heading text-uppercase ">
                <h3 class="text-white">si vous avez perdu votre objet ? FindMy vous aide à le retrouver en quelques clics !</h3>
            </div>
            <a class="btn btn-warning btn-xl text-uppercase" href="/login">Entrer</a>
        </div>
    </header>
    <!-- Services-->
<?php include_once '../views/decoupage/service.php';?>
  <!-- a propos -->
  <?php include_once '../views/decoupage/about.php';?>
<!-- team -->
<?php include_once '../views/decoupage/team.php';?>
    <!--  contact -->
    <?php include_once '../views/decoupage/contact.php';?>
</main>
 <?php include_once '../views/decoupage/footer.php';?>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
 <!-- javascript -->
 <script src="js/scripts.js"></script>
 <!-- font awsome -->
<script src="fontawesome-v6/js/all.min.js"></script>
</body>
</html>