<?php use Illuminate\Support\Facades;?>
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
    {!! Form::open(array('url' => 'admin/function_type')) !!}
        <div class="form-group">
            <label for="name">name:</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>

        <button type="submit" class="btn btn-primary form-control">新增</button>
    {!! Form::close() !!}
</div>

</body>
</html>
