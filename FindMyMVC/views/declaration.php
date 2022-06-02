<?php include_once '../views/decoupage/header.php' ;?>
<?php include_once '../views/decoupage/navbar.php' ;?>
<main class="vh-100 ">

    <div  class=" container-fluid d-flex align-items-center justify-content-center h-100 mt-5"  >
        <div class="text-center">
             <h1 class=""> Bienvenu cher client</h1>
            <h4 class=""> choisir l'état de votre objet !</h4>
            <div class="row">
                <button class="  col btn btn-success m-3 " onclick="showmodelTrouve();">trouvé </button>
                <button class=" col btn btn-danger m-3 " onclick="showmodel();"> Perdu </button>
            </div>
    </div>
    </div>
<?php include_once '../views/decoupage/modelDeclarationPerdu.php' ;?>
<?php include_once '../views/decoupage/modelDeclarationTrouve.php' ;?>

</main>
<script src="js/scripts.js"></script>
</body>
</html>