<?php include_once '../views/decoupage/header.php' ;?>
<?php include_once '../views/decoupage/navbar.php' ;?>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark  sticky-top ">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <h4 class="text-warning"> <img src="assets/img/logos/search1.png  " alt="..." />FindMy</h4>   
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav  ms-auto py-4 py-lg-0">
                    <li class="nav-item  "><a class="nav-link text-light" href="pagePublic.html">ACCUEIL</a></li>

                    <!-- <div class="navbar-nav text-uppecase ms-auto py-4 py-lg-0"> -->
                        <li class="nav-item "><a class="nav-link text-light" href="declaration.html">DECLARATION</a></li>

                        <li class="nav-item">
                            <a class="nav-link text-light text-decoration-underline" href="mesObjet.html">MES OBJETS </a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
<main>


<div class=" container  d-flex flex-column  justify-content-center align-items-center">
    <div><h1 class="mb-5 text-decoration-underline">Mes declarations</h1></div>
    <div class="">
        <button class="btn btn-danger" onclick="showObjetPerdu();">Objet Perdu </button>
        <button class="btn btn-success" onclick="showObjetTrouve();">Objet Trouve </button>
    </div>
</div>

    <div class="content p-0">
        <div class="container" >
            <!-- table  -->
                <div class="table-responsive">
                <div id="ObjetsPerdu" style="display: none;"> 
                         <h1> perdu</h1>
                    <table class="table custom-table" >
                        <thead>
                            <tr>
                                <th> </th>
                                <th scope="col">Photo</th>
                                <th scope="col">declaration</th>
                                <th scope="col">Objet</th>
                                <th scope="col">Categorie</th>
                                <th scope="col">Date de perd</th>
                                <th scope="col">Ville</th>
                                <th scope="col">Adresse</th>
                                <!-- <th scope="col">Details</th> -->
                                <th scope="col">Telephone</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  foreach($mesDeclarations as $val) { ?>
                            <tr>
                                <td >
                                <button  class="border-0  bg-dark mt-3  text-warning"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" > 
                                <i class="bi bi-eye-fill"></i>
                                </button>
                                </td>
                                <td> <img src="files/<?= $val['image']?>" style="width: 80px;  height: 80px;" class="rounded-circle" alt="image d'objet" ></td>
                                <td class="p-4"> <?= $val['declaration'] ?></td>
                                <td class="p-4"> <?= $val['objet'] ?></td>
                                <td class="p-4"> <?= $val['categorie'] ?></td>
                                <td class="p-4"> <?= $val['dateDePerd'] ?></td>
                                <td class="p-4"> <?= $val['ville'] ?></td>
                                <td class="p-4"> <?= $val['adresse'] ?></td>
                                <!-- <td class="p-4"> <?= $val['details'] ?></td> -->
                                <td class="p-4"> <?= $val['tele'] ?></td>
                                <td class="p-4">
                                <button onclick="showmodel();" class="border-0  bg-white">
                                <i class="bi bi-pen text-success"></i>
                                </button>
                                </td>
                                <td class="p-4" >
                                  <a href="./deleteObjetPerdu?id=<?php echo $val['id'] ?>"><i class="bi bi-trash3 text-danger"></i></a>
                                </td>
                            
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                        <!-- ! objet trouve  -->
                        <div id="ObjetsTrouve" style="display:block;"> 
                         <h1> trouve</h1>
                        <table class="table custom-table" >
                        <thead>
                       
                            <tr>
                                <th> </th>
                                <th scope="col">Photo</th>
                                <th scope="col">declaration</th>
                                <th scope="col">Objet</th>
                                <th scope="col">Categorie</th>
                                <th scope="col">Date de perd</th>
                                <th scope="col">Ville</th>
                                <th scope="col">Adresse</th>
                                <!-- <th scope="col">Details</th> -->
                                <th scope="col">Telephone</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            <tr>
                                <td >
                                <button  class="border-0  bg-white "  data-bs-toggle="modal" data-bs-target="#staticBackdrop" > 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                                </button>
                                </td>
                                <td> <img src="assets/img/chien.jpg" style="width: 80px;  height: 80px;" class="rounded-circle" alt="image d'objet" ></td>
                                    
                                <td class="p-4">xx</td>
                                <td class="p-4"> vv</td>
                                <td class="p-4">ss</td>
                                <td class="p-4">xcbx</td>
                                <td class="p-4"> xjcjx</td>
                                <td class="p-4"> xjcx</td>
                                <!-- <td class="p-4"> <?= $val['details'] ?></td> -->
                                <td class="p-4"> 87338</td>
                                <td class="p-4">
                                <button onclick="showmodel();" class="border-0  bg-white">
                                <i class="bi bi-pen text-success"></i>
                                </button>
                                </td>
                                <td class="p-4" >
                                  <a href="./deleteObjetPerdu?id=<?php echo $val['id'] ?>"><i class="bi bi-trash3 text-danger"></i></a>
                                </td>
                            
                            </tr>
              
                        </tbody>
                    </table>

                    </div>
















                </div>
        </div>
    </div>
   </main>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"> <?= $val['objet'] ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col">
                <img  src="assets/img/chien.jpg" alt="..." style="width: 56%;">
            </div>
            <div class="col">
            <?= $val['details'] ?>
      
             </div>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>

<!-- model informations   -->

<div class="container-fluid d-flex justify-content-center align-items-center" >  
    <form id="informations" class="bg-light container p-3 border-3 col-lg-6 col-12 border-start border-warning " style="display: none; position: absolute; top: 35%; ">

       <input  value ="voir" type="button" class="btn-close" aria-label="Close" onclick="btnCloseModel()" style="float:right">
       <h3> préciser :</h3>
       <label> &#10038; declaration :</label>
       <div class="form-check ">
           <input class="form-check-input " type="radio" name="exampleRadios " value="option1 " checked>
           <label >
               Public 
           </label>
       </div>
       <div class="form-check ">
           <input class="form-check-input " type="radio" name="exampleRadios "  value="option2 ">
           <label>
          Privé
           </label>

       </div>
       <div class="py-3 "> <label>  &#10038; c'est quoi ?  :</label>
           <input type="text" class="p-1 border border-warning ">
       </div>
        <label>  &#10038; Catégorie :</label>
       <select class="form-select form-select-sm " aria-label=".form-select-sm example ">
       <option> categories</option>
       <option> Personne</option>
       <option> animal</option>
       <option> Objet</option>
       </select>
       <div class="py-3 ">
            <label>  &#10038;  Date de trouve /perd  :</label>
           <input type="date" class="p-1 border border-warning ">
       </div>

       <label>  &#10038; Ville :</label>
       <select class="form-select " aria-label="Default select example ">
           <option selected>Toutes le maroc </option>
           <option value="1 ">casablanca </option>
           <option value="2 ">El jadida</option>
           <option value="3 ">Agadir</option>
           <option value="3 ">safi</option>
           <option value="3 ">fes</option>
           <option value="3 ">rabat</option>
           <option value="3 ">tanget</option>
         </select>
       <label>  &#10038; Adresse :</label>
       <div class="input-group ">
           <span class="input-group-text ">Adresse</span>
           <textarea class="form-control " aria-label="With textarea "></textarea>
       </div>
       <label>  &#10038; details :</label>
       <div class="input-group mb-1 ">
           <span class="input-group-text "> plus details </span>
           <textarea class="form-control " aria-label="With textarea "></textarea>
       </div>
       <label>  &#10038; image :</label>
       <div class="input-group mb-1 ">
           <input  type="file" class="form-control " aria-label="With textarea "/>
       </div> 

        <div class="container d-flex justify-content-center m-3">      
            <input type="submit" class="btn btn-warning text-dark ">
        </div>
   </form>
</div>  
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>