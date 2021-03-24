@extends('disseny')

@section('content')

<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Nom</td>
          <td>Email</td>
          <td>Telèfon</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($empleat as $empl)
        <tr>
            <td>{{$empl->id}}</td>
            <td>{{$empl->nom}}</td>
            <td>{{$empl->email}}</td>
            <td>{{$empl->telefon}}</td>
            <td class="text-center">
                <a href="{{ route('empleats.edit', $empl->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('empleats.destroy', $empl->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection