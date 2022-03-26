<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Start Up Page</title>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
<body>
    @include("layouts.header")
    @yield("content")
    @include("layouts.footer")
</body>
</html>