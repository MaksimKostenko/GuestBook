<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .background{background: linear-gradient(orangered, gold)  no-repeat;background-size: cover ;}
            html { height: 150%; }
            body {height: 100%;}
        </style>
        <meta charset="utf-8">
        <title>Guest Book</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    </head>
    <body class="background" >

        <div class="container" align="center" >
            <h1>Guest Book</h1><hr/>
            @include('pages.form')
            @include('pages.addButton')
            <div class="text-right"><b>Number of messages</b><i class="badge">{{ $count }}</i></div><br>
            @include('pages.items')
        </div>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>