@extends('layouts.app')

@section('title-block')Чіп@endsection

@section('content')
    <h2>Чіп № {{ $name }} </h2>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Вид</th>
      <th scope="col">Порода</th>
      <th scope="col">Ім'я улюбленця</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a href="{{ route('forOneChipPet', $data->id) }}">{{ $data->id }}</a></th>
      <td>{{ $data->kind }}</td>
      <td>{{ $data->type }}</td>
      <td>{{ $data->name }}</td>
    </tr>
  </tbody>
</table>
    </div>
@endsection