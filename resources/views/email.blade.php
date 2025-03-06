Email mandata da {{$mail['name']}} con email {{$mail['email']}} e numero di telefono {{$mail['phone']}}.
<br>
@if ($mail['web'])
    Sito web: {{$mail['web']}}
@else
    Sito web non specificato. <br>
@endif
<br>
{{$mail['message']}}