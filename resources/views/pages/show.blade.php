@extends('templates.master')

@section('content')

   <h1>{{$article->title}}</h1>
   <p>{{$article->body}}</p>
   <a class="btn btn-primary" href='/article/{{$article->id}}/edit'>Edit</a>
   <a class="btn btn-danger" href='/article/{{$article->id}}/destroy'>Delete</a>
    
@stop