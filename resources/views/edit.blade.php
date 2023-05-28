@extends('LayOuts.MainTemplate')

@section('content')

<h1>Modification...</h1>

<form action="{{ route('Events.update', $eventEdit->id) }}" method="POST">

    {{ csrf_field() }} 

    {{ method_field('PUT') }}

    <input type="text" name="titre" placeholder="titre"/></br>

    <textarea name="description" placeholder="description" ></textarea></br>
    
    <input type="submit" value="Modifier"/>

</form>

<form action="{{ route('Events.destroy', $eventEdit->id) }}" method="POST" 
onclick="return confirm('Etes vous sur ?')">

    {{ csrf_field() }} 

    {{ method_field('DELETE') }}
    
    <input type="submit" value="supprimer"/>

</form>

@stop
