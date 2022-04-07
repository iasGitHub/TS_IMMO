@include('./home')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Quartier</title>
</head>
<body>
  <main class="container-fluid m-5">
      <div class="my-3 p-3 bg-body shadow-sm">
      <h6 class="border-bottom pb-2 mb-4"> Liste des quartiers </h6>
      {{ $quartiers->links()}}
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
                  <th scope="col">Libelle</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($quartiers as $quartier)
                <tr>
                  <th scope="row">{{ $loop->index + 1}}</th>
                  <td>{{ $quartier->libelle}}</td>
                  <td>
                    <a href="{{ route('quartier.edit', ['quartier'=>$quartier])}}" class="btn btn-info">Modifier</a>
                    <a href="#" class="btn btn-danger" 
                                        onclick="if(confirm('Voulez-vous vraiment supprimer ce quartier ?'))
                                        {
                                          document.getElementById('form-{{$quartier->id}}').submit()
                                        }">Supprimer
                    </a>
                    <form id="form-{{$quartier->id}}" action="{{ route('quartier.delete',
                      ['quartier'=>$quartier->id])}}" method="POST">
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