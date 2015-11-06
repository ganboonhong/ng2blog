<!DOCTYPE html>
<html lang="en">

<head>
    <title>新增分類</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>新增分類</h2>
    <hr/>
    {!! Form::open(array('url' => 'admin/function')) !!}
        <div class="form-group">
            <label for="name">name:</label>
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
</div>

</body>
</html>
