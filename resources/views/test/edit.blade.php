@extends('app')

@section('content')

<div class="col-md-6">

    {!! Form::model($article, ['route' => ['test.update', $article->id], 'method' => 'put']) !!}
        @include('test._form')

    <div class="form-group">
        <div class="col-sm-2">&nbsp;</div>
        <div class="col-sm-5">
            <button type="submit" class="btn btn-primary submit-button">Редактировать</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@stop