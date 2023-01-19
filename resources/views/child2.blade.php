@extends('layout')

@section('content')
    <h3>Meine Liste </h3>
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
    


    </ul>
@endsection

@section('sidebare')
    @parent
    <h4>Meine Termine</h4>
    <p>Termin 1 <br> Termine 2</p>
    
@endsection
