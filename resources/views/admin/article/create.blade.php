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
                <label for="name">標題:</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>

            <div class="form-group">
                <label for="name">標題(英文):</label>
                <input type="text" name="title_en" class="form-control" id="title_en">
            </div>

            <div class="nice_editor form-group">
                <label for="name">中文內容:</label>
                <textarea name="content" id="content" style="width:100%"></textarea>
            </div>

            <div class="nice_editor form-group">
                <label for="name">英文內容:</label>
                <textarea name="content_en" id="content_en" style="width:100%" class="nice_editor"></textarea>
            </div>

            <div class="form-group">
                <label for="sel1">分類：</label>
                <select name="category_id" class="form-control" id="sel1">
                    @foreach( $categories as $category )
                        <option value="{{$category->category_id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

        @include('admin.partials.footer_elements')

        {!! Form::close() !!}



        {!! HTML::script('js/nicEditor/nicEdit.js') !!}

        <script type="text/javascript">

            $(function(){
                $('#function_form').validate({
                    rules:{
                        name: "required"
                    }
                });
            })

            bkLib.onDomLoaded(function() {
                new nicEditor({fullPanel : true}).panelInstance('content');
                new nicEditor({fullPanel : true}).panelInstance('content_en');
            });
        </script>

    @stop