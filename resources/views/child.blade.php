@extends('layout')

@section('content')
<h3>Der inhalt aus dem Child (child.blade.php)</h3>
    
@endsection

@section('sidebar')
    @parent
    <h4>Sidebar aus dem Child</h4>
    
@endsection