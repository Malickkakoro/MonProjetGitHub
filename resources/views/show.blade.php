@extends('LayOuts.MainTemplate')

@section('content')

<h1>l'evenements {{ $eventShow->id }}...</h1>
<h3>{{ $eventShow->titre }}</h3>
<p>{{ $eventShow->description }}<p>

<a href="{{ route('Events.edit',  $eventShow->id) }}">Modifier</a></br>
<a href="{{ route('Home') }}">Retour</a></br>

@stop
