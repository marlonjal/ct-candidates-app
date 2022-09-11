@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREATE TASK</h1>
@stop

@section('content')


<form action="/artic" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="" class="form-label">TASK</label>
        <input id="task" name="task" type="text" class="form-control" tabindex="2">

    </div>

    <div class="mb-3">
        <label for="" class="form-label">DESCRIPTION</label>
        <input id="description" name="description" type="text" class="form-control" tabindex="3">

    </div>



    <a href="/artic" class = "btn btn-secondary" tabindex="5"> Cancel </a>
    <button  type="submit" class = "btn btn-primary" tabindex="4"> Save </button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
    
@stop
