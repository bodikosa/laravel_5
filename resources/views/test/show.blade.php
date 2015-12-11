@extends('app')

@section('content')


        <table class="table">
            <thead>
            <tr>
                <td>#</td>
                <td>Название</td>
                <td>Действие</td>
            </tr>
            </thead>
            <tbody>
                <?foreach($post as $post_one){?>
                <tr>
                    <td><?=$post_one->id;?></td>
                    <td><?=$post_one->no;?></td>
                    <td><a class="label label-success" href="once/<?=$post_one->id;?>">Посмотреть</a><a class="label label-warning" href="edit/<?=$post_one->id;?>">Редактировать</a><a class="label label-danger" href="destroy/<?=$post_one->id;?>">Удалить</a></td>
                </tr>
                <?}?>
            </tbody>
        </table>


@stop