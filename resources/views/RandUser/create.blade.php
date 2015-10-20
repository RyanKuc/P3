@extends('layouts.master')

@section('title')
Random User Generator
@stop


@section('head')
    <link href="/css/user/create.css" type='text/css' rel='stylesheet'>
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
@if(!isset($data['numuser']))
       You have not specified a user count
   @else

       @foreach($data['faker'] as $k => $v)

         @foreach ($v as $value)
             {{ $value }}.<br>
         @endforeach
     @endforeach


   @endif


@stop
