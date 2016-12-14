<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .background{background: linear-gradient(orangered, gold)  no-repeat;background-size: cover ;}
        html { height: 100%; }
        body {height: 100%;}
    </style>
    <meta charset="utf-8">
    <title>Editing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body class="background">

    <div class="container" align="center">
        <h1>Guest Book<br>(Editing message)</h1><hr/>

        <div class="messages" align="left">
                @foreach ($messages as $message)
                @if($message->id == $id)
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <h3 class="panel-title">
                        <span class="pull-right "><strong>
                                Created at: </strong><br>{{ $message->created_at }}

                        </span>
                                <span>
                            #{{ $message->id }}<br>
                            <strong>Author: </strong>{!! $message->username !!}<br>
                                    @unless(empty($message->email))
                                        <strong>E-mail: </strong><a href="mailto:{{ $message->email }}">{{ $message->email }}</a>
                                    @endunless
                        </span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            {!! $message->message !!}
                            <hr/>
                        </div>
                    </div>
                @endif
                @endforeach
        </div>
        <div align="center">
            @include('pages.form')
            @include('pages.editButton')<br>
            @include('pages.homeButton')
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
        </div>
    </div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>