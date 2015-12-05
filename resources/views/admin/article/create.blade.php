@extends('admin.templates.create')

    @section('title')
        文章（新增）
    @stop

    @section('title')
        文章（新增）
    @stop

    @section('content')

        {!! Form::open(array('url' => 'admin/article', 'id' => 'article_form')) !!}
            <div class="form-group">
                <label for="name">名稱:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <label for="sel1">Select list (select one):</label>

            <select name="admin_function_type_id" class="form-control" id="sel1">
                @foreach( $function_types as $function_type )
                    <option value="{{$function_type->admin_function_type_id}}">{{$function_type->name}}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary form-control" style="margin-top: 10px">新增</button>
        {!! Form::close() !!}

        <script>

            $(function(){
                $('#function_form').validate({
                    rules:{
                        name: "required"
                    }
                });
            })

        </script>

    @stop