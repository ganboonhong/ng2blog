<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {!! HTML::script('js/_general_js.js') !!}

</head>
<body>

<div class="container">
    <h2>@yield('title')</h2>
    <hr/>

    @yield('content')
</div>

</body>
</html>

<script>
    $(function(){
        focus_on_first_input();
        //$("form").find('input[type=text],textarea,select').filter(':visible:first').focus();
    })
</script>
