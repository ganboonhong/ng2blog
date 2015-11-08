@extends('admin.templates.list')

    @section('title')
        功能分類
    @stop

    @section('title')
        功能分類
    @stop

    @section('items')

        @foreach( $function_types as $function_type )
        <a href="#" class="list-group-item">{{$function_type->name}}</a>
        {{--<a href="#" class="list-group-item active">Second item</a>--}}
        @endforeach

    @stop