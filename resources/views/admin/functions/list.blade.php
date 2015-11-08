@extends('admin.templates.list')

    @section('title')
        功能
    @stop

    @section('title')
        功能
    @stop

    @section('items')

        @foreach( $functions as $function )
        <a href="{{route('function_edit', ['id' => $function->admin_function_id])}}" class="list-group-item" style="width:95%;display: inline-block">
            {{$function->name}}
        </a>
        <a href="{{route('function_edit', ['id' => $function->admin_function_id])}}" style="margin-left:10px">
            <span class="glyphicon glyphicon-remove"></span>
        </a>
        {{--<a href="#" class="list-group-item active">Second item</a>--}}
        @endforeach

    @stop

