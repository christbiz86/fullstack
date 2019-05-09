<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Styles -->
    <style>
        div.myButton input {
            background:url({{url('/images/Send-button.png')}}) no-repeat;
            background-size: 50%;
            background-position: top center;
            cursor:pointer;
            width: 300px;
            height: 50px;
            border: none;
            padding-bottom: 315px;
        }
    </style>
</head>