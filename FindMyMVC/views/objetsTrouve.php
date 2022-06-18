
<form action="" method="post" class="d-flex  flex-column justify-content-center justify-items-end mt-5 ms-5 sticky-top " style="top:7%;" >
    <div class=" m-2 d-flex   flex-column   col-11 col-lg-2 rounded ms-5 ">
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

