@extends('template')

@section('content')
<h1>Blog admin</h1>


<table class="table">
    <tr>
        <th>ID</th>
        <th>Tag</th>
        <th>Action</th>
    </tr>

    @foreach($tags as $tag)
    <tr>
        <td>{{$tag->id}}</td>
        <td>{{$tag->name}}</td>
        <td></td>
    </tr>
     @endforeach
</table>
    {!! $tags->render() !!}
@endsection