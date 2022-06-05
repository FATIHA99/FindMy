<?php include_once '../views/decoupage/header.php' ;?>
    <?php include_once '../views/decoupage/navbar.php' ;?>
    <div class="SEARCH   m-2 bg-light sticky-top d-flex flex-column  col-11 col-lg-2 rounded" style="top:125px; z-index: 3; ">
        <h5 class="text-decoration-underline m-2"> <?php   echo  $_SESSION['user'];    ?>  </h5>
        <div class="d-flex align-items-center border bg-white px-3  m-1 ">
        <i class="bi bi-search"></i>
            <select class="form-select border-0 " aria-label="Default select example ">
            <option selected>Qui cherche vous?</option>
            <option value="1 ">Papier </option>
            <option value="2 ">persone</option>
            <option value="3 ">animal</option>
            <option value="3 ">clefs</option>

          </select>
        </div>

        <div class="d-flex align-items-center border border-1 bg-white px-3 m-1 " style="height: 5%; " >
        <i class=" me-3 bi bi-geo-alt"></i>
            <select class="form-select border-0 " aria-label="Default select example ">
            <option selected>Toutes le maroc </option>
            <option value="1 ">casablanca </option>
            <option value="2 ">El jadida</option>
            <option value="3 ">Agadir</option>
            <option value="3 ">safi</option>
            <option value="3 ">fes</option>
            <option value="3 ">rabat</option>
            <option value="3 ">tanget</option>
          </select>
        </div>
        <div class="d-flex align-items-center border bg-white px-3 m-1">
        <i class="bi bi-box2"></i>
            <select class="form-select border-0 " aria-label="Default select example ">
            <option selected>Toutes les objets </option>
            <option value="1 ">trouvé</option>
            <option value="2 ">Perdu</option>
          </select>
        </div>
    </div>
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
 <?php }  ?>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>