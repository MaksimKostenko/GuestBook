<div class="messages" align="left">
    @if(!$messages->isEmpty())
        @foreach ($messages as $message)
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <h3 class="panel-title">
                        <span class="pull-right ">
                            <strong>Created at: </strong><br>{{ $message->created_at }}
                            <!--<strong>Updated at: </strong>{{ $message->updated_at }}<br>-->
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
                    <div class="pull-right">
                        <button class="btn btn-info" type="button" onclick="window.location='{{ route("message.edit",$message->id ) }}'">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </button>
                        <button class="btn btn-danger" type="button" onclick="window.location='{{ route("message.delete",$message->id ) }}'">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>         
        @endforeach

        <div class="text-center">
            {{ $messages->render() }}
        </div>

    @endif
</div>
