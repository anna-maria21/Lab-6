@extends('layouts.app')

@section('title-block')Чіпування@endsection

@section('content')
    <h2>Чіпування Вашого улюбленця</h2>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Вид</th>
      <th scope="col">Порода</th>
      <th scope="col">Ім'я</th>
      <th scope="col">Номер чіпу</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $pet)
    <tr>
      <th scope="row"><a href="{{ route('forOneChipPet', $pet->id) }}">{{ $pet->id }}</a></th>
      <td>{{ $pet->kind }}</td>
      <td>{{ $pet->type }}</td>
      <td>{{ $pet->name }}</td>
      <td><a href="{{ route('forOneChip', $pet->chip->id) }}">{{ $pet->chip->name }}</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>
@endsection