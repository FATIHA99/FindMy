<!-- Contact-->
<section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase m-5">Contacter-nous </h2>
                <h3 class="section-subheading text-muted"> Vos messages nous intéressent</h3>
            </div>
        
            <form id="contactForm" action=""  method="post">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" name="name" type="text" placeholder="votre Nom  *"  required />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" name="email" type="email" placeholder="  Votre Email *"  required />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Un e-mail est requis.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">L'email n'est pas valide.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" name="tele" placeholder="Votre telephone *" required />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro de téléphone est requis</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" name="msg" placeholder=" Message *"  required></textarea>
                          
                        </div>
                    </div>
                </div>
             
             
            
          
                <!-- Submit Button-->
            
                <div class="text-center"><button name="submit" class="btn btn-warning  btn-xl text-uppercase" id="submitButton" type="submit">Envoyer le message </button></div>
            </form>
        </div>
    </section>