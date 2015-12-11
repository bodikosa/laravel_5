@extends('app')

@section('content')

<div class="col-lg-6">
    <a href="\test\edit">Изменить</a>
    <div class="secure">Register form</div>
    {!! Form::open(array('route'=>'test.store','method'=>'POST')) !!}

    {!! Form::close() !!}
    </div>
@stop