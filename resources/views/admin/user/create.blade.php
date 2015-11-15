@extends('admin.templates.create')

@section('title')
    新增使用者
@stop

@section('title')
    新增使用者
@stop

@section('content')

    {!! Form::open(array('url' => 'admin/user')) !!}

        <div class="form-group">
            <label for="name">名稱</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>

        <div class="form-group">
            <label for="name">E-mail:</label>
            <input type="text" name="email" class="form-control" id="email">
        </div>

        <div class="form-group">
            <label for="password">密碼:</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="form-group">
            <label for="password">確認密碼:</label>
            <input type="password" name="password_2" class="form-control" id="password_2">
        </div>

        <div class="form-group">
            <label for="password">權限:</label>
            <input type="password" name="privilege" class="form-control" id="privilege">
        </div>

        <button type="submit" class="btn btn-primary form-control">新增</button>
    {!! Form::close() !!}

@stop
