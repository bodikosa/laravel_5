@extends('app')

@section('content')

<div class="col-md-6">

    {!! Form::model($article, ['method' => 'POST', 'route' => ['test.update', $article->id]]) !!}
        @include('test._form')
    {!! Form::close() !!}
</div>

@stop