@extends('template')

@section('title') {{$title}} @endsection('title')

@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Adress</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($doctorsList as $doctor)
    <tr>
      <th scope="row">{{$doctor['id']}}</th>
      <td>{{$doctor['name']}}</td>
      <td>{{$doctor['phone']}}</td>
      <td>{{$doctor['adress']}}</td>
      <td>{{$doctor['status']}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection('content')
