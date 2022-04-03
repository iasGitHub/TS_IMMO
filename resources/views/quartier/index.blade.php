@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Libelle</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($quartiers as $quartier)
        <tr>
            <td>{{$quartier->id}}</td>
            <td>{{$quartier->libelle}}</td>
            <td><a href="{{ route('quartier.edit', $quartier->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('quartier.destroy', $quartier->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection