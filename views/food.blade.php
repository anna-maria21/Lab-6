@extends('layouts.app')

@section('title-block')Їжа@endsection

@section('content')
    <h2>Корми для Вашого улюбленця</h2>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Назва</th>
      <th scope="col">Виробник</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $food)
    @foreach($food->fabricators as $fabricator)
      <tr>
        <td><a href="{{ route('forOneFood', $food->id) }}">{{ $food->name }}</a></td>
        <td><a href="{{ route('forOneFabricator', $fabricator->id) }}">{{ $fabricator->name }}</a></td>
      </tr>
    @endforeach
  @endforeach
  </tbody>
</table>
    </div>
@endsection