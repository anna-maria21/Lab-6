@extends('layouts.app')

@section('title-block')Домашній улюбленець@endsection

@section('content')
    <h2>Домашній улюбленець - {{ $kind }} {{ $name }} </h2>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ім'я</th>
      <th scope="col">Місто</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $data->id }}</a></th>
      <td><a href="{{ route('forOneOwner', $data->id) }}">{{ $data->name }}</td>
      <td>{{ $data->town }}</td>
    </tr>
  </tbody>
</table>
    </div>
@endsection