@extends('LayOuts.MainTemplate')

@section('content')

<h1>Creation d'evenements...</h1>
<form action="{{ route('Events.store') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="titre" placeholder="titre"/></br>

    <textarea name="description" placeholder="description"></textarea></br>
    <input type="submit" value="Creer"/>
</form>
<a href="{{ route('Home') }}">Tout les evenements</a>

@stop