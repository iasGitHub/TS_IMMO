@extends('./home')
@section('section')

  <section id="main-content">
    <section class="wrapper">
        <h3 class="border-bottom pb-2 mb-4"> Liste des propriétaires </h3>
          {{ $proprietaires->links()}}
        <div>
            @if(session()->has("successDelete"))
                <div class="alert alert-success">
                    <h3> {{ session()->get('successDelete') }} </h3>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Adresse</th>
                      <th scope="col">Email</th>
                      <th scope="col">Téléphone</th>
                      <th scope="col">Civilité</th>
                      <th scope="col">CNI</th>
                      <th scope="col">Sexe</th>
                      <th scope="col">Date de naissance</th>
                      <th scope="col">Lieu de naissance</th>
                      <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proprietaires as $proprietaire)
                    <tr>
                      <th scope="row">{{ $loop->index + 1}}</th>
                      <td>{{ $proprietaire->nom}}</td>
                      <td>{{ $proprietaire->prenom}}</td>
                      <td>{{ $proprietaire->adresse}}</td>
                      <td>{{ $proprietaire->email}}</td>
                      <td>{{ $proprietaire->telephone}}</td>
                      <td>{{ $proprietaire->civilite}}</td>
                      <td>{{ $proprietaire->cni}}</td>
                      <td>{{ $proprietaire->sexe}}</td>
                      <td>{{ $proprietaire->dateNaissance}}</td>
                      <td>{{ $proprietaire->lieuNaissance}}</td>
                      <td>
                        <a href="{{ route('proprietaire.edit', ['proprietaire'=>$proprietaire])}}" class="btn btn-info">Modifier</a>
                        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer ce propriétaire ?')){document.getElementById('form-{{$proprietaire->id}}').submit() }">Supprimer</a>
                        <form id="form-{{$proprietaire->id}}" action="{{ route('proprietaire.delete',
                          ['proprietaire'=>$proprietaire->id])}}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                        </form>
                      </td>                  
                    </tr>
                    @endforeach
                </tbody>
              
            </table>
        </div>
    </section>
  </section>

@endsection