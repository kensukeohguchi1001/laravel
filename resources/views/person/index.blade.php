@extends('layout.helloapp')

@section('title','Person.index');

@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')
  <table>
    <tr>
      <th>data</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>{{$item->getData()}}</td>
    </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
