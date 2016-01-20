@extends('templates.master')

@section('content')

    <h1>This article will be deleted</h1>

    {!! Form::model($article, [
     'method' => 'DELETE',
     'action' => ['ArticleController@destroy', $article->id]
 ]) !!}



    <div class=form-group">
        {!! Form::label('title', 'Article Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Article Text:', ['class' => 'control-label']) !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

    {!! Form::close() !!}

    <a class="btn btn-success" href='/article/{{$article->id}}'>Cancel</a>


@stop