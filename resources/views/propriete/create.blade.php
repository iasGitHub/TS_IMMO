@extends('layouts.header')
@section('section')

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Informations propriété</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Ajout d'une propriété</h4>

            @if(session()->has("success"))
                <div class="alert alert-success">
                    <h3> {{ session()->get('success') }} </h3>
                </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="contact-form php-mail-form" role="form" action="{{ route('propriete.store' )}}" method="POST">
            
              @csrf

              <div class="form-group">
                <input type="text" name="libelle" class="form-control" id="libelle" placeholder="Entrer le libelle de la propriété" data-rule="minlen:2" data-msg="Please enter at least 2 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="superficie" class="form-control" id="superficie" placeholder="Entrer la superficie" data-rule="minlen:4" data-msg="Please enter a valid number" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="file" name="photo" class="form-control" id="photo" placeholder="Choisir la photo" data-rule="minlen:4" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" name="description" class="form-control" id="description" placeholder="Entrer une description de la propriété" data-rule="minlen:20" data-msg="Please enter at least 50 chars">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <select class="form-select" name="proprietaire_id" aria-label="list des propriétaires">
                    <option selected>Sélectionner le propriétaire</option>
                      @foreach ($proprietaires as $proprietaire)
                        <option value="{{ $proprietaire->id }}">{{ $proprietaire->nom }} {{ $proprietaire->prenom }}</option>
                      @endforeach
                </select>
              </div>
              <div class="form-group">
                <select class="form-select" name="quartier_id" aria-label="list des quartiers">
                    <option selected>Sélectionner le quartier</option>
                      @foreach ($quartiers as $quartier)
                        <option value="{{ $quartier->id }}">{{ $quartier->libelle }}</option>
                      @endforeach
                </select>
              </div>
              <div class="form-group">
                <select name="disponibilite" id="">
                  <option selected>Disponibilité ?</option>
                  <option value="1">1</option>
                  <option value="2">0</option>
                </select>
              </div>
              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Enregistrer</button>
                <a href="{{route('propriete.create')}}" class="btn btn-large btn-danger">Annuler</a>
              </div>
            </form>
          </div>

        </div>
        
      </section>
      <!-- /wrapper -->
    </section>
   
@endsection