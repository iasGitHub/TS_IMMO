@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Proprietaire Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('proprietaire.update', $proprietaire->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Proprietaire Name:</label>
              <input type="text" class="form-control" name="nom" value="{{ $proprietaire->nom }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Game Price :</label>
              <input type="text" class="form-control" name="price" value="{{ $proprietaire->prenom }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection

<!-- <tr>
                <th>No</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Civilité</th>
                <th>CNI</th>
                <th>Sexe</th>
                <th>Date de naissance</th>
                <th>Lieu de naissance</th>
                <th>Actions</th>
            </tr> -->