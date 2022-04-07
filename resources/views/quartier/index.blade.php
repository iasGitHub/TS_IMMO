@extends('./home')
@section('section')
  <section id="main-content">
        <section class="wrapper">
            <h6 class="border-bottom pb-2 mb-4"><i class="fa fa-angle-right"></i> Liste des quartiers </h6>
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
        </section>
  </section>
@endsection