@extends('layouts.app')
@section('section')

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Informations du quartier</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Modification informations du quartier</h4>

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
              <form class="contact-form php-mail-form" role="form" action="{{ route('quartier.update', ['quartier'=>$quartier->id]) }}" method="POST">
              
                @csrf

                <input type="hidden" name="_method" value="put">

                <div class="form-group">
                    <input type="text" name="libelle" class="form-control" id="libelle" value="{{$quartier->libelle}}" placeholder="Entrer le nom du quartier" data-rule="minlen:2" data-msg="Please enter at least 2 chars" >
                </div>
                <div class="form-send">
                    <button type="submit" class="btn btn-large btn-primary">Enregistrer</button>
                    <a href="{{route('quartier.create')}}" class="btn btn-large btn-danger">Annuler</a>
                </div>
              </form>
          </div>

        </div>
      </section>
      <!-- /wrapper -->
    </section>
   
@endsection