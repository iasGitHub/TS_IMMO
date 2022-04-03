<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Propriétaire</title>
</head>
<body>
  <main class="container-fluid m-5">
      <div class="my-3 p-3 bg-body shadow-sm">
      <h6 class="border-bottom pb-2 mb-4"> Liste des propriétaires </h6>
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
                    <a href="#" class="btn btn-info">Modifier</a>
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
      </div>
      </div>
  </main>
</body>
</html>