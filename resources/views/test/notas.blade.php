@extends('template')

@section('content')
    <h1>Olá</h1>
    <ul>
        @foreach($notas as $nota)
            <li>{{$nota}}</li>
        @endforeach
    </ul>
@stop