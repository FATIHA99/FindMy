<?php include_once '../views/decoupage/header.php' ;?>
<?php include_once '../views/decoupage/navbar.php' ;?>
<main>
<div class=" container  d-flex flex-column  justify-content-center align-items-center">
<h1 class="text-success text-center ">déclarations des objets trouvés</h1>
    <div class="">
        <a  href="/mesDeclarations" class="btn btn-danger"> voir les  déclarations des objets perdu </a>
    </div>
</div>
    <div class="content p-0">
        <div class="container" >
            <!-- table  -->
                <div class="table-responsive">
                <div id="ObjetsPerdu" > 
                    <table class="table custom-table" >
                        <thead>
                            <tr>
                                <th> </th>
                                <th scope="col">Photo</th>
                                <!-- <th scope="col">declaration</th> -->
                                <th scope="col">Objet</th>
                                <th scope="col">Categorie</th>
                                <th scope="col">Date de perd</th>
                                <th scope="col">Ville</th>
                                <th scope="col">Adresse</th>
                                <!-- <th scope="col">Details</th> -->
                                <th scope="col">Telephone</th>
                                <th scope="col">disponibilité</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  foreach($mesDeclarationsTrouve as $val) { ?>
                            <tr>
                                <td >
                                <button  class="border-0  bg-white mt-3  text-dark"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" > 
                               
                                <i class="bi bi-eye-fill objetsTrouve" 
                                data="<?php echo 
                                  $val['objet']. ','
                                . $val['dateDeTrouve']. ','
                                . $val['ville']. ',' 
                                . $val['adresse']. ','
                                . $val['details']. ','
                                . $val['tele']. ',' 
                                . $val['despo']. ','
                                . $val['image'];
                                    ?>"></i>
                              
                                </button>
                                </td>
                                <td><img src="files/<?= $val['image']?>" style="width: 80px;  height: 80px;" class="rounded-circle" alt="image d'objet" ></td>
                        
                                <td class="p-4"> <?= $val['objet'] ?></td>
                                <td class="p-4"> <?= $val['categorie'] ?></td>
                                <td class="p-4"> <?= $val['dateDeTrouve'] ?></td>
                                <td class="p-4"> <?= $val['ville'] ?></td>
                                <td class="p-4"> <?= $val['adresse'] ?></td>
                                <!-- <td class="p-4"> <?= $val['details'] ?></td> -->
                                <td class="p-4"> <?= $val['tele'] ?></td>
                                <td class="p-4"> <?= $val['despo'] ?></td>
                                <td class="p-4">
                                <a href="/updateDecTrouve?id=<?= $val['id'] ?>" class=" btn border-0  bg-white">
                                <i class="bi bi-pen text-success"></i>
                                </a>
                                </td>
                                <td class="p-4" >
                                  <a href="./deleteObjetTrouve?id=<?php echo $val['id'] ?>"><i class="bi bi-trash3 text-danger"></i></a>
                                </td>
                            
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </main>

<!-- Modal  view-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"> <?= $val['objet'] ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col">
                <img  id="myImageID" src="files/" alt="..." style="width: 56%;">
            </div>
            <div class="col">
            <ul>
             
                 <li id="details"></li>
                  <li id="ville"></li>
                  <li id="adresse"></li>
                  <li id="tele"></li>
                  <li id="despo"></li>
              </ul>
      
             </div>
        </div>
        <div class="modal-footer">
        <span id="dateDeTrouve"></span>
        </div>
      </div>
    </div>
  </div>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>