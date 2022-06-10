<?php include_once '../views/decoupage/header.php' ;?>
<?php include_once '../views/decoupage/navbar.php' ;?>
<main class="vh-100 ">
    <div  class=" container-fluid d-flex align-items-center justify-content-center h-75 mt-5"  >
        <div class="text-center">
             <h1 class=""> Bienvenu cher client</h1>
            <h4 class=""> choisir l'état de votre objet !</h4>
            <div class="row">
                <a   href="/DeclarationTrouve" class=" col btn btn-success m-3 " >trouvé </a>
                <a href="/DeclarationPerdu" class=" col btn btn-danger m-3 " > Perdu </a>
            </div>
    </div>
    </div>
</main>
<?php include_once '../views/decoupage/footer.php' ;?>

<script src="js/scripts.js"></script>
</body>
</html>