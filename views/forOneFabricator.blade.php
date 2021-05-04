@extends('layouts.app')

@section('title-block')Корми@endsection

@section('content')
    <h2>Виробник - {{ $name }} </h2>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Назва</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $food)
    <tr>
      <th scope="row">{{ $food->id }}</th>
      <td><a href="{{ route('forOneFood', $food->id) }}">{{ $food->name }}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@endsection