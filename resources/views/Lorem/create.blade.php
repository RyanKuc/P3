@extends('layouts.master')

@section('title')
Lorem Ipsum Generator
@stop

@section('head')
    <link href="/css/lorem/create.css" type='text/css' rel='stylesheet'>
@stop

@section('navbar')

    <ul class="nav navbar-nav">
      <li><a href="#"> Random User Generator <span class="sr-only">(current)</span></a></li>
      <li class="active"><a href="#">Lorem Ipsum Generator</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Other CSCI E-15 Projects
          <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">P1</a></li>
          <li class="divider"></li>
          <li><a href="#">P2</a></li>
          <li class="divider"></li>
          <li><a href="#">P4</a></li>
        </ul>
      </li>
    </ul>

@stop
@section('content')
<div class="container">
  <div class="col-lg-4">
<form method="POST" action="/lorem">
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
        <fieldset>
            <label for='numpar'>Enter Number of Paragraphs:</label>
            <input type="number" id='numpar' name="numpar" min='0' max='100' value=
            @if(!isset($data['numpar']))
                '0'
            @else
                {{ $data['numpar'] }}>
            @endif
            <br/>
            <label for='numsent'>Enter Number of Sentences/Paragraph:</label>
            <input type="number" id='numsent' name="numsent" min='0' max='100' value=
            @if(!isset($data['numsent']))
                '0'
            @else
                {{ $data['numsent'] }}>
            @endif

        </fieldset>

        <br>
        <button type="submit" class="btn btn-primary">Generate Text</button>
  </form>
</div>
<div class="col-lg-6">
  @if(!isset($data['numpar']))
         You have not specified how many paragraphs
     @else

      @foreach($data['faker'] as $k => $v)

         @foreach ($v as $key => $value)
        <p> {{ $value }} </p>
         @endforeach

       @endforeach
     @endif
</div>

@stop
