@extends('layouts.master')

@section('title')
Lorem Ipsum Generator
@stop

@section('head')
<link href="/css/lorem/create.css" type='text/css' rel='stylesheet'>
@stop

@section('navbar')

<ul class="nav navbar-nav">
  <li><a href="/user"> Random User Generator <span class="sr-only">(current)</span></a></li>
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
    <div class="col-sm-4">
      <form method="POST" action="/lorem" class="form-horizontal">
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
        <fieldset>
          <legend>Lorem Ipsum Generator</legend>
          <div class="form-group">
            <label for='numpar' class='control-label'>Enter Number of Paragraphs:</label>

            <input type="number" maxlength='2' id='numpar' class='form-control' name="numpar" min='1' max='99' value=
            @if(!isset($data['numpar']))
            '0'
            @else
            {{ $data['numpar'] }}>
            @endif


            <label for='numsent' class='control-label'>Enter Number of Sentences/Paragraph:</label>

            <input type="number" maxlength='2' id='numsent' class='form-control' name="numsent" min='1' max='20' value=
            @if(!isset($data['numsent']))
            '1'
            @else
            {{ $data['numsent'] }}>
            @endif

          </div>
          <br>
            <button type="submit" class="btn btn-primary">Generate Text</button>
        </fieldset>
      </form>
    </div>
    <div class="col-sm-7 col-sm-offset-1">
      @if(!isset($data['numpar']))
      <p class="text-danger">You have not specified how many paragraphs<p>
      @else

      @foreach($data['faker'] as $k => $v)

      @foreach ($v as $key => $value)
      <p> {{ $value }} </p>
      @endforeach

      @endforeach
      @endif
    </div>

    @stop
