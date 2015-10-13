@extends('templates.master')

@section('content')

<h1>Create Article</h1>

{{--{!! Form::open(array('action' => array('ArticleController@store', $userId)))!!}--}}

{!!  Form::open(array('action' => 'ArticleController@store')) !!}

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