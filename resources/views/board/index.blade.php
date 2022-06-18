@extends('layout.helloapp')

@section('title','Board');

@section('menubar')
@parent
インデックスページ
@endsection


@section('content')
<table>
  <tr>
    <th>message</th>
    <th>name</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->message}}</td>
    <td>{{$item->person->name}}</td>
  </tr>
  @endforeach
</table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
