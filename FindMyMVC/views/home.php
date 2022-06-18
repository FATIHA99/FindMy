<?php include_once '../views/decoupage/header.php' ;?>
<?php include_once '../views/decoupage/navbar.php' ;?>


<form action="" method="post" class="sticky-top " style="top:20%; width:max-content" >
    <div class="bg-white  m-2 d-flex   flex-column  rounded">
        <h5 class=" m-2"> <i class='bx bxs-user fs-5 mt-2'></i>  <?php   echo  $_SESSION['user'];    ?>  </h5>
        <div class="input-group d-flex  mt-2  bg-white border-1 " >
                <div class="d-flex align-items-center border border-0 bg-white px-3 m-1 " style="height: 5%; " >
                <!-- <i class=" me-3 bi bi-geo-alt"></i> -->
                <select class="form-select border-0  " aria-label="Default select example " name="ville">
                    <option selected>Toutes le maroc</option>
                    <option>casablanca </option>
                    <option>El jadida</option>
                    <option>Agadir</option>
                    <option>safi</option>
                    <option>fes</option>
                    <option>rabat</option>
                    <option>tanget</option>
                </select>
                </div>
            <button  type="submit" class="btn bg-warning">
                <i class="fas fa-search"></i>
            </button>
         </div>
    </div>
</form>

<!--  les cartes   -->
<div>
    <?php  foreach($objets as $val ){ ?>
    <div class="card mb-3 container  p-0 border-bottom border-dark rounded-3 bg-light " style="max-width: 800px; ">      
        <div class="row g-0 ">
            <div class="col-md-4 bg-light border" style="background-image:url('files/<?= $val['image']?>') ;
            background-position: center;
            background-repeat: no-repeat; 
            background-size: cover;
            " >
                 <img src="files/<?= $val['image']?>"  class="img-fluid rounded-start  " alt="..." style="visibility:hidden;">
            </div>
            <div class="col-md-8">
                <div class="card-body ">
                    <h5 class="card-title "> <?php echo $val['objet'] ?></h5>
                    <ul style="  list-style-type: none;">
                        <li><?php echo $val['categorie'] ?></li>
                        <li><?php echo $val['tele'] ?></li>
                        <li><?php echo $val['adresse'] ?></li>
                        <li> <?php echo $val['details'] ?></li>
                        <hr>
                        <li ><i class=" me-3 bi bi-calendar-date"></i><?php echo $val['dateDePerd'] ?> <i class=" mx-3 bi bi-geo-alt"></i><?php echo $val['ville'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 <?php } ?>

</div>
<?php include_once '../views/decoupage/footer.php' ;?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>