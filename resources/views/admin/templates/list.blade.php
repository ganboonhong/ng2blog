<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {!! HTML::style('css/all.css') !!}
    {!! HTML::style('css/fr_custom.css') !!}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {!!  HTML::script('js/jquery.tshift.min.js')  !!}


</head>
<body>

<div class="container" id="checkboxes">

    <h2>
        @yield('title')
    </h2>

    <hr/>

    <div class="list-group">
        @yield('items')
    </div>

</div>

</body>
</html>

<script>
    $(function() {

        $('#checkboxes').tshift();

        get_checkboxes_checked();

    });

    function get_checkboxes_checked(){
        $('#first_checkbox').change(function(){
            if(this.checked) {
                $('#checkboxes').find('input[type=checkbox]').prop('checked', true);
            }else{
                $('#checkboxes').find('input[type=checkbox]').prop('checked', false);
            }
        });
    }
</script>
