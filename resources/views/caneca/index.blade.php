@extends('template')

@section('content')
    <h1>Listagem do banco</h1>

        @foreach($canecas as $caneca)
            <h2>{{$caneca->modelo}}</h2>
            <h4>{{$caneca->marca}}</h4>
            <h5>{{$caneca->created_at}}</h5>
            <hr>
        @endforeach

@stop