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

            <div class="form-group">
                <label for="name">名稱:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <label for="sel1">分類：</label>

            <select name="category_id" class="form-control" id="sel1">
                @foreach( $categories as $category )
                    <option value="{{$category->category_id}}">{{$category->name}}</option>
                @endforeach
            </select>









        <div id="sample">
            {{--<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>--}}
            {!! HTML::script('js/nicEditor/nicEdit.js') !!}
            <script type="text/javascript">
                bkLib.onDomLoaded(function() {
                    new nicEditor({fullPanel : true}).panelInstance('area2');
                });
            </script>

            <textarea cols="60" id="area2" style="width:100%">
                Some Initial Content was in this textarea
            </textarea>
        </div>















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