@extends('layouts.app')

@section('title-block')Виробники@endsection

@section('content')
    <h2>Корм - {{ $name }} </h2>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Назва</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $fabricator)
    <tr>
      <th scope="row">{{ $fabricator->id }}</th>
      <td><a href="{{ route('forOneFabricator', $fabricator->id) }}">{{ $fabricator->name }}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@endsection