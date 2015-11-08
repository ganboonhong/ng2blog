@extends('admin.templates.list')

    @section('title')
        系統功能
    @stop

    @section('title')
        系統功能
    @stop

    @section('items')

        @foreach( $functions as $key => $function )

            @if($key == 0)
                <span>
                <label>
                    <input type="checkbox" value="" class="big-checkbox" id="first_checkbox">
                </label>
            </span>
                <a class="list-group-item item_row active">系統功能</a>
                <br />
            @endif

            <span>
                <label>
                    <input type="checkbox" value="" class="big-checkbox">
                </label>
            </span>

            <a href="{{route('function_edit', ['id' => $function->admin_function_id])}}" class="list-group-item item_row">
                {{$function->name}}
            </a>
            <a href="{{route('function_destroy', ['id' => $function->admin_function_id])}}" class="btn btn-danger btn-sm list_delete_btn">
                <span class="glyphicon glyphicon-remove"></span>
            </a>
            <br />
            {{--<a href="#" class="list-group-item active">Second item</a>--}}
        @endforeach

    @stop






