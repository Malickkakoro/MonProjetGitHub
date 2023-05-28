@extends('LayOuts.MainTemplate')

@section('content')

<h1>Listes des evenements...</h1>

@if(count($boos) > 0)

<ul>

@foreach($boos as $boos)
    <li><a href="{{ route('Events.show', $boos->id) }}"> {{ $boos->titre }}</a></li>
@endforeach
</ul>

@else

<p>Pas d'evenements</p>
@endif
<a href="{{ route('Events.create') }}">Creer un evenement</a>


@stop
