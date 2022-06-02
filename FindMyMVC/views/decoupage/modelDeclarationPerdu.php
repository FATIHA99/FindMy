<!-- MODEL de perd  -->
<div class="container-fluid d-flex justify-content-center ">  
       <form enctype="multipart/form-data" action="" method="POST" id="informations" class="bg-light container border-3 col-lg-6 col-12 border-start border-danger " style="display:none; position: absolute; top: 15%; ">
       <h3> préciser :</h3>
        <input type="button" class="btn-close" aria-label="Close" onclick="btnCloseModel()" style="float:right">
<!-- declaration -->
        <div class="row" style=" visibility:hidden ;">
           <label class="p-0">&#10038;declaration :</label>
            <div class="form-check ">
                <input class="form-check-input " type="radio" name="declaration" id="exampleRadios1 " value="public" checked>
                <label class="form-check-label " for="exampleRadios1 ">
                    Public 
                </label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="declaration" id="exampleRadios2 " value="privé">
                <label class="form-check-label" for="exampleRadios2 ">
                Privé
                </label>
            </div>
        </div>
<!-- Objet -->
       <div class="row">
        <div class="py-3  col ">
             <label>  &#10038; le nom  de l'objet :</label> <br>
            <input type="text" class="p-1 border border-warning" name="objet">
        </div>
<!-- categorie -->
         <div class="col"> 
             <label>  &#10038; Catégorie :</label>
                <select class="form-select" name="categorie">
                <option> categories</option>
                <option> Personne</option>
                <option> animal</option>
                <option> Objet</option>
                </select>
          </div>
          </div>
<!--  dateDePerd -->
            <div class="row">
            <div class="py-3 col ">
                <label>  &#10038;  Date de perd  :</label>
                <br>
                <input type="date" class="p-1 border border-warning" name="dateDePerd">
            </div>
<!-- ville  -->
       <div class="col">
        <label>  &#10038; Ville :</label>
        <select class="form-select " aria-label="Default select example" name="ville">
            <option selected>Toutes le maroc </option>
            <option value="casablanca">casablanca </option>
            <option value="El jadida">El jadida</option>
            <option value="Agadir">Agadir</option>
            <option value="safi">safi</option>
            <option value="fes">fes</option>
            <option value="rabat">rabat</option>
            <option value="tanger">tanger</option>
          </select>
        </div>
        </div>
<!-- adresse -->
        <label>  &#10038; Adresse :</label>
        <div class="input-group ">
            <span class="input-group-text ">Adresse</span>
            <textarea class="form-control " aria-label="With textarea" name="adresse"></textarea>
        </div>
<!-- details -->
        <label>  &#10038; details :</label>
        <div class="input-group mb-1 ">
            <span class="input-group-text "> plus details </span>
            <textarea class="form-control " aria-label="With textarea" name="details"></textarea>
        </div>

        <!--tele -->
        <label>  &#10038;tele :</label>
        <div class="input-group mb-1 ">
        <input  class="p-1 border border-warning"  type="text" placeholder="telephone " name="tele">
        </div>
     
<!-- image -->
        <label class="form-group">  &#10038; image :</label>
        <div class="input-group mb-1 ">
            <input  type="file" class="form-control" aria-label="With textarea" name="image"></input>
        </div> 
         <div class="container d-flex justify-content-center m-3">     
            <input type="hidden" class="" name="fk_user" value= <?php  echo  $_SESSION['id'];    ?>>
        </div>
        <div class="container d-flex justify-content-center m-3">     
            <input type="submit" class="btn btn-warning text-dark" name="submit">
        </div>
    </form>
</div>  