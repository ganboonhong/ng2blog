@extends('admin.templates.create')

    @section('title')
        文章分類（新增）
    @stop

    @section('title')
        文章分類（新增）
    @stop

    @section('content')

    {!! Form::open(array('url' => 'admin/category', 'id' => 'category_form')) !!}
    <div class="form-group">
        <label for="name">名稱:</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>

    <div class="form-group">
        <label for="name_en">英文名稱:</label>
        <input type="text" name="name_en" class="form-control" id="name_en">
    </div>


    <div style="margin-bottom: 20px;">
        公開
        <span style="margin-left:10px ;margin-right:10px ; ">
            <label for="visible_Y">是</label>
            <input name="visible" id="visible_Y" type="radio" value="Y" checked>
        </span>
        <label for="visible_N">否</label>
        <input name="visible" id="visible_N" type="radio" value="N">
    </div>

    <button type="submit" class="btn btn-primary form-control">新增</button>
    {!! Form::close() !!}


    <script>
        $('#category_form').validate({
            rules:{
                name:"required"
            }
        })

    </script>

    @stop
