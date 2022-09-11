@extends('adminlte::page')

@section('title', 'CRUD TASK LIST')

@section('content_header')
    <h1>TASK LIST</h1>
@stop

@section('content')
<a href="artic/create" class = "btn btn-primary mb-3"  > CREATE TASK </a>

<table id="artic"  class="display" style="width:100%" ;>
    <thead class="bg-primary text-white">
        <tr>
         
            <th scope = "col"> TASK </th>
            <th scope = "col"> DESCRIPTION </th>
            <th scope = "col"> ACCION </th>
        </tr>

    </thead>
    <tbody>
        @foreach ($artics as $artic)
        <tr>
           
            <td>{{$artic -> task}}</td>
            <td>{{$artic -> description}}</td>
            <td>
                <form action="{{route ('artic.destroy',$artic->id)}}" method="POST">
                <a href="/artic/{{$artic ->id}}/edit" class="btn btn-info">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Complete</button>

                </form>
           </td>

            
                
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.jqueryui.min.css" rel="stylesheet">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.jqueryui.min.js"></script>

<script>
   $(document).ready(function () {
    $('#artic').DataTable({
        "lengthMenu": [[5,10,50,-1],[5,10,50,"All"]]
    });
}); 
</script>
@stop