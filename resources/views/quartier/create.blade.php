@extends('layouts.app')
@section('section')

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Informations quartier</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Ajout un nouvel quartier</h4>
            <div id="message"></div>

            <form class="contact-form php-mail-form" role="form" action="{{ route('quartier.store') }}" method="POST">
            @csrf
              <div class="form-group">
                <input type="text" name="libelle" class="form-control" id="libelle" placeholder="Entrer le nom du quartier" data-rule="minlen:2" data-msg="Please enter at least 2 chars" >
                <div class="validate"></div>
              </div>

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