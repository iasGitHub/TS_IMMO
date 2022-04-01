@extends('layouts.app')
@section('section')

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Informations propriétaire</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Ajout proprietaire</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

              <div class="form-group">
                <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer votre nom" data-rule="minlen:2" data-msg="Please enter at least 2 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Entrer votre prenom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Entrer votre adresse" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Entrer votre email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Entrer votre numéro de téléphone" data-rule="minlen:8" data-msg="Please enter a valid number phone">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="civilite" class="form-control" id="civilite" placeholder="Entrer votre civilité" data-rule="minlen:8" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="cni" class="form-control" id="cni" placeholder="Entrer votre nméro d'identification" data-rule="minlen:8" data-msg="Please enter a valid number ">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="sexe" class="form-control" id="sexe" placeholder="Entrer votre sexe" data-rule="minlen:8" data-msg="Please enter at least 4 chars ">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="date" name="dateNaissance" class="form-control" id="dateNaissance" placeholder="Entrer votre sexe" data-rule="minlen:8" data-msg="Please enter a valid date ">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="lieuNaissance" class="form-control" id="lieuNaissance" placeholder="Entrer votre lieu de naissance" data-rule="minlen:4" data-msg="Please enter at least 4 chars ">
                <div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Enregistrer</button>
              </div>

            </form>
          </div>

        </div>
        <!-- /row -->


        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
   
@endsection