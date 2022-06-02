<?php include_once '../views/decoupage/header.php' ;?>
    <?php include_once '../views/decoupage/navbar.php' ;?>
    <div class="SEARCH   m-2 bg-light sticky-top d-flex flex-column  col-11 col-lg-2 rounded" style="top:125px; z-index: 3; ">
        <h5 class="text-decoration-underline m-2"> <?php   echo  $_SESSION['user'];    ?>  </h5>


        <div class="d-flex align-items-center border bg-white px-3  m-1 ">
            <svg xmlns=" http://www.w3.org/2000/svg " width="20 " height="20 " fill="currentColor " class="bi bi-search " viewBox="0 0 16 16 ">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z "/>
            </svg>
            <select class="form-select border-0 " aria-label="Default select example ">
            <option selected>Qui cherche vous?</option>
            <option value="1 ">Papier </option>
            <option value="2 ">persone</option>
            <option value="3 ">animal</option>
            <option value="3 ">clefs</option>

          </select>
        </div>

        <div class="d-flex align-items-center border bg-white px-3 m-1 " style="height: 5%; " >
            <svg  xmlns="http://www.w3.org/2000/svg " width="20 " height="20 " fill="currentColor " class="bi bi-geo-alt " viewBox="0 0 16 16 ">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0
            0 0 2 6c0 4.314 6 10 6 10z "
            />
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z " />
            </svg>
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
        <div class="d-flex align-items-center border bg-white px-3 m-1 "  >

            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box2" viewBox="0 0 16 16">
                <path d="M2.95.4a1 1 0 0 1 .8-.4h8.5a1 1 0 0 1 .8.4l2.85 3.8a.5.5 0 0 1 .1.3V15a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4.5a.5.5 0 0 1 .1-.3L2.95.4ZM7.5 1H3.75L1.5 4h6V1Zm1 0v3h6l-2.25-3H8.5ZM15 5H1v10h14V5Z"/>
              </svg>

            <select class="form-select border-0 " aria-label="Default select example ">
            <option selected>Toutes les objets </option>
            <option value="1 ">trouvé</option>
            <option value="2 ">Perdu</option>
          </select>
        </div>
    </div>
<div>

    <?php  foreach($objets as $val ){ ?>
    <div class="card mb-3 container py-3 border-bottom border-success " style="max-width: 800px; ">      
        <div class="row g-0 ">
            <div class="col-md-4 ">
                <img src="assets/img/sac.jfif " class="img-fluid rounded-start " alt="... ">
                <?php 
                // echo "<embed src='data:'".$val['type'].";base64,".base64_encode./>";
                ?>
            </div>
            <div class="col-md-8 ">
                <div class="card-body ">
                    <h5 class="card-title "> <?php echo $val['objet'] ?></h5>
                    <h6 class="card-text "><?php echo $val['categorie'] ?></h6>
                    <h6 class="card-text "> <?php echo $val['tele'] ?></h6>
            
                    <h6 class="card-text "> <?php echo $val['adresse'] ?></h6>
                     <h6 class="card-text "> <?php echo $val['details'] ?></h6>
               <div class="row"> 

                     <p class=" col card-text "><?php echo $val['dateDePerd'] ?></p>
                     <p class=" col card-text "> <?php echo $val['ville'] ?></p>
                    </div>
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