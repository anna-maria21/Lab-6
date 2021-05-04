@extends('layouts.app')

@section('title-block')Господар@endsection

@section('content')
    <h2>Господар - {{ $name }} </h2>
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
  @foreach($data as $pet)
    <tr>
      <th scope="row"><a href="{{ route('forOnePet', $pet->id) }}">{{ $pet->id }}</a></th>
      <td>{{ $pet->kind }}</td>
      <td>{{ $pet->type }}</td>
      <td>{{ $pet->name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@endsection