@extends('layouts.app')

@section('title-block')Домашній улюбленець@endsection

@section('content')
    <h2>Домашній улюбленець - {{ $kind }} {{ $name }} </h2>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">№ чіпа</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $data->id }}</a></th>
      <td><a href="{{ route('forOneChip', $data->id) }}">{{ $data->name }}</a></td>
    </tr>
  </tbody>
</table>
    </div>
@endsection