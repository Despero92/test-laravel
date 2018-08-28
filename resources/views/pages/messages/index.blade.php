@extends('book')
@section('content')
    @include('_common._form')
    <div class="text-right"><b>Всего сообщений:</b> <i class="badge">{{ count($messagesArray) }}</i></div>
    <br/>
    <div class="messages">
        <div class="panel panel-default">
            @for( $i=0; $i < count($messagesArray); $i++ )
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span>#{{ $messagesArray[$i]['id'] }} {{ $messagesArray[$i]['name'] }}</span>
                    <span class="pull-right label label-info">{{ $messagesArray[$i]['created_at'] }}</span>
                </h3>
            </div>
            <div class="panel-body">
                {{ $messagesArray[$i]['message'] }}
                <hr/>
                <div class="pull-right">
                    <a href="{{ route('message.edit', ['id' => $messagesArray[$i]['id']]) }}" class="btn btn-info">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <a href="{{ route('message.delete', ['id' => $messagesArray[$i]['id']]) }}" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </div>
            </div>
            @endfor
        </div>
    </div>
@stop

