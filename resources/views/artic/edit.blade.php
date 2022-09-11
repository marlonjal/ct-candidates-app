@extends('layouts.basetemplate')

@section('content')
<h2>EDIT TASK</h2>

<form action="/artic/{{$artic->id}}" method="POST">
        @csrf
        @method('PUT')
    
    <div class="mb-3">
        <label for="" class="form-label">TASK</label>
        <input id="task" name="task" type="text" class="form-control" value="{{$artic->task}}">

    </div>

    <div class="mb-3">
        <label for="" class="form-label">DESCRIPTION</label>
        <input id="description" name="description" type="text" class="form-control" value="{{$artic->description}}">

    </div>



    <a href="/artic" class = "btn btn-secondary" tabindex="5"> Cancel </a>
    <button type="submit" class = "btn btn-primary" tabindex="4"> Save </button>
</form>

@endsection