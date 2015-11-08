@extends('admin.templates.list')

    @section('title')
        功能分類
    @stop

    @section('title')
        功能分類
    @stop

    @section('items')

        @foreach( $function_types as $function_type )
            <a href="{{route('function_type_edit', ['id' => $function_type->admin_function_type_id])}}"
               class="list-group-item item_row">
                {{$function_type->name}}
            </a>
            <a href="{{route('function_type_destroy', ['id' => $function_type->admin_function_type_id])}}"
               class="btn btn-danger btn-sm list_delete_btn">
                <span class="glyphicon glyphicon-remove"></span>
            </a>
        {{--<a href="#" class="list-group-item active">Second item</a>--}}
        @endforeach

    @stop