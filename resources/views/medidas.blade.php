@extends('layout.app')
@section('title')
    MEDIDAS
@endsection
@section('short-title')
    INFORMACION DE MEDIDAS DE TEMPERATURA EN TIEMPO REAL
@endsection
@section('img-title')
    {{asset('assets/img/foto2.jpeg')}}
@endsection
@section('content')
<div id="app">
    <medidas :medidas="{{json_encode($medidas)}}" :url="'{{url('/')}}'"></medidas>
</div>
@endsection
