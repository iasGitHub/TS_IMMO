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
          <td>Nom</td>
          <td>Prenom</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($proprietaires as $proprietaire)
        <tr>
            <td>{{$proprietaire->id}}</td>
            <td>{{$proprietaire->nom}}</td>
            <td>{{$proprietaire->prenom}}</td>
            <td><a href="{{ route('proprietaire.edit', $proprietaire->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('proprietaire.destroy', $proprietaire->id)}}" method="post">
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