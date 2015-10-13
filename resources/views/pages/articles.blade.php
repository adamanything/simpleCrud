@extends('templates.master')

@section('content')

    <h1>Articles List</h1>

@if($articleList)
    <ul>
        @foreach($articleList as $article)

            <li><a href='/article/{{$article->id}}'>{{$article->title}}</a></li>

        @endforeach
    </ul>
@endif


@stop