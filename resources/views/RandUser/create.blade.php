@extends('layouts.master')

@section('title')
Random User Generator
@stop


@section('head')
    <link href="/css/user/create.css" type='text/css' rel='stylesheet'>
    <link href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" type='text/css' rel='stylesheet'>
@stop

@section('form')
<form method="POST" action="/user">
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
        <fieldset>
            <label for='numuser'>Enter Number of Users:</label>
            <input type="number" id='numuser' name="numuser" min='0' max='100' value=
            @if(!isset($data['numuser']))
                '0'
            @else
                {{ $data['numuser'] }}>
            @endif

        </fieldset>

        <br>
        <button type="submit" class="btn btn-primary">Generate List</button>
  </form>
@stop
@section('results')
<table id="example" class="display table-bordered" cellspacing="0" width="50%">
  <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
            </tr>
  </thead>
  <tbody>


@if(!isset($data['numuser']))
       You have not specified a user count
   @else

       @foreach($data['faker'] as $k => $v)

       @foreach ($v as $key => $value)
       <tr>
        @foreach ($value as $kee => $vee)

       <td> {{ $vee }} </td>
       @endforeach
     </tr>
   @endforeach

     @endforeach
   @endif
 </tbody>
 </table>

@stop

@section('body')
<script> $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
@stop
