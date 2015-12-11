@extends('app')

@section('content')

    <?echo link_to_route('photo/create', 'Yes');?>
<p>Заработало!</p>
    <?foreach($post as $one){
        echo $one->id."->";
        echo $one->text."<br />";
    }?>
@stop