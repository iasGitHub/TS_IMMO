@extends('./home')
@section('section')


  <section id="main-content">
      <section class="wrapper">
        <h6><i class="fa fa-angle-right"></i> Liste des propriétaire</h6>
      {{ $proprietes->links()}}
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
                  <th scope="col">superficie</th>
                  <th scope="col">description</th>
                  <th scope="col">photo</th>
                  <th scope="col">Disponbilité</th>
                  <th scope="col">Quartier</th>
                  <th scope="col">Propriétaire</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($proprietes as $propriete)
                <tr>
                  <th scope="row">{{ $loop->index + 1}}</th>
                  <td>{{ $propriete->libelle}}</td>
                  <td>{{ $propriete->superficie}}</td>
                  <td>{{ $propriete->description}}</td>
                  <td>{{ $propriete->photo}}</td>
                  <td>{{ $propriete->disponibilite}}</td>
                  <td>{{ $propriete->quartier_id}}</td>
                  <td>{{ $propriete->proprietaire_id}}</td>
                  <td>
                    <a href="{{ route('propriete.edit', ['propriete'=>$propriete])}}" class="btn btn-info">Modifier</a>
                    <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cette propriete ?')){document.getElementById('form-{{$propriete->id}}').submit() }">Supprimer</a>
                    <form id="form-{{$propriete->id}}" action="{{ route('propriete.delete',
                      ['propriete'=>$propriete->id])}}" method="POST">
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


@endsection