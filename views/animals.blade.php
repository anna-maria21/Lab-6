@extends('layouts.app')

@section('title-block')Улюбленці@endsection

@section('content')
    <h2>База улюбленців</h2>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Вид</th>
      <th scope="col">Порода</th>
      <th scope="col">Ім'я</th>
      <th scope="col">Господар</th>
      <th scope="col">Місто</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $pet)
    <tr>
      <th scope="row"><a href="{{ route('forOnePet', $pet->id) }}">{{ $pet->id }}</a></th>
      <td>{{ $pet->kind }}</td>
      <td>{{ $pet->type }}</td>
      <td>{{ $pet->name }}</td>
      <td><a href="{{ route('forOneOwner', $pet->owner->id) }}">{{ $pet->owner->name }}</a></td>
      <td>{{ $pet->owner->town }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>
@endsection