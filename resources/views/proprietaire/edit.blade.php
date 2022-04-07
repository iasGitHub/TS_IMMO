@extends('layouts.app')
@section('section')

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Informations propriétaire</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Modification informations proprietaire</h4>

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
              <form class="contact-form php-mail-form" role="form" action="{{ route('proprietaire.update', ['proprietaire'=>$proprietaire->id]) }}" method="POST">
              
                @csrf

                <input type="hidden" name="_method" value="put">

                <div class="form-group">
                    <input type="text" name="nom" class="form-control" id="nom" value="{{$proprietaire->nom}}" placeholder="Entrer votre nom" data-rule="minlen:2" data-msg="Please enter at least 2 chars" >
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control" id="prenom" value="{{$proprietaire->prenom}}" placeholder="Entrer votre prenom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                </div>
                <div class="form-group">
                    <input type="text" name="adresse" class="form-control" id="adresse" value="{{$proprietaire->adresse}}" placeholder="Entrer votre adresse" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" value="{{$proprietaire->email}}" placeholder="Entrer votre email" data-rule="email" data-msg="Please enter a valid email">
                </div>
                <div class="form-group">
                    <input type="text" name="telephone" class="form-control" id="telephone" value="{{$proprietaire->telephone}}" placeholder="Entrer votre numéro de téléphone" data-rule="minlen:8" data-msg="Please enter a valid number phone">
                </div>
                <div class="form-group">
                    <input type="text" name="civilite" class="form-control" id="civilite" value="{{$proprietaire->civilite}}" placeholder="Entrer votre civilité" data-rule="minlen:8" data-msg="Please enter at least 4 chars">
                </div>
                <div class="form-group">
                    <input type="text" name="cni" class="form-control" id="cni" value="{{$proprietaire->cni}}" placeholder="Entrer votre nméro d'identification" data-rule="minlen:8" data-msg="Please enter a valid number ">
                </div>
                <div class="form-group">
                    <input type="text" name="sexe" class="form-control" id="sexe" value="{{$proprietaire->sexe}}" placeholder="Entrer votre sexe" data-rule="minlen:8" data-msg="Please enter at least 4 chars ">
                </div>
                <div class="form-group">
                    <input type="date" name="dateNaissance" class="form-control" id="dateNaissance" value="{{$proprietaire->dateNaissance}}" placeholder="Entrer votre sexe" data-rule="minlen:8" data-msg="Please enter a valid date ">
                </div>
                <div class="form-group">
                    <input type="text" name="lieuNaissance" class="form-control" id="lieuNaissance" value="{{$proprietaire->lieuNaissance}}" placeholder="Entrer votre lieu de naissance" data-rule="minlen:4" data-msg="Please enter at least 4 chars ">
                </div>
                <div class="form-send">
                    <button type="submit" class="btn btn-large btn-primary">Enregistrer</button>
                    <a href="{{route('proprietaire.create')}}" class="btn btn-large btn-danger">Annuler</a>
                </div>
              </form>
          </div>

        </div>
        
      </section>
      <!-- /wrapper -->
    </section>
   
@endsection