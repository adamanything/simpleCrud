@extends('templates.master')

@section('content')

   {{--{!! Form::model($article, array('route' => array('ArticleController@update', $article->user_id))) !!}--}}

   {!! Form::model($article, [
    'method' => 'PATCH',
    'action' => ['ArticleController@update', $article->id]
]) !!}



   <div class=form-group">
       {!! Form::label('title', 'Article Title:', ['class' => 'control-label']) !!}
       {!! Form::text('title', null, ['class' => 'form-control']) !!}
   </div>

   <div class="form-group">
       {!! Form::label('body', 'Article Text:', ['class' => 'control-label']) !!}
       {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
   </div>

   {!! Form::submit('Create Article', ['class' => 'btn btn-primary']) !!}

   {!! Form::close() !!}


    @stop