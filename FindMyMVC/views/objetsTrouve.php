<div class="d-flex flex-column  sticky-top  justify-content-center align-items-center"style="top:90px; left:10%; z-index: 3;">
    <div class="m-2  bg-light col-7 col-lg-2 rounded"  >
        <h5 class="text-decoration-underline m-2"> <?php   echo  $_SESSION['user'];    ?>  </h5>
        <div class="d-flex align-items-center border bg-white px-3   m-1 ">
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
    </div>
    </div>
<div>
    <?php  foreach($objetTrouve as $val ){ ?>
        <div class="container-fluid  d-flex flex-column  justify-content-center align-items-center">
    <div class="card mb-3     col-8 border-bottom  rounded-3 bg-light " style="max-width: 800px; ">      
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
                    <div class="row">
                        <div class="col"> <h5 class="card-title "> <?php echo $val['objet'] ?></h5></div>
                        <div class="col"></div>
                        <div class="col" ><i class="bi bi-whatsapp  fs-4 text-success"></i></div>
                    </div>
                    <ul style="  list-style-type: none;">
                        <li><?php echo $val['categorie'] ?></li>
                        <li><?php echo $val['tele'] ?></li>
                        <li><?php echo $val['despo'] ?></li>
                        <li><?php echo $val['adresse'] ?></li>
                        <li> <?php echo $val['details'] ?></li>
                        <hr>
                        <li ><i class=" me-3 bi bi-calendar-date"></i><?php echo $val['dateDeTrouve'] ?> <i class=" mx-3 bi bi-geo-alt"></i><?php echo $val['ville'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
 <?php }  ?>
</div>

