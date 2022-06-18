@extends('layout.helloapp')

@section('title','Person.index');

@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')
  <table>
    <tr>
      <th>person</th>
      <th>board</th>
    </tr>
    @foreach ($hasItems as $item)
    <tr>
      <td>{{$item->getData()}}</td>
      <td>
        @if ($item->boards != null)
        <table width="100%">
          @foreach ($item->boards as $obj)
            <tr><td>{{$obj->getData()}}</td></tr>
          @endforeach
        </table>
        @endif
      </td>
    </tr>
    @endforeach
  </table>
  <div style="margin: 10px;"></div>
  <table>
    <tr><th>person</th></tr>
    @foreach ($noItems as $item)
      <tr>
        <td>{{$item->getData()}}</td>
      </tr>
  </table>
  @endforeach
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
