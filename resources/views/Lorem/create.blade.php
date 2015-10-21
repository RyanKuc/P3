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
      @if(count($errors) > 0)
      <ul class='list-unstyled'>
          @foreach ($errors->all() as $error)
              <li class='text-warning'>{{ $error }}</li>
          @endforeach
      </ul>
      @endif


      <div class="col-sm-4">
        <form method="POST" action="/lorem" class="form-horizontal">
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <fieldset>
            <legend>Lorem Ipsum Generator</legend>
            <div class="form-group">
              <label for='paragraphs' class='control-label'>Enter Number of Paragraphs:</label>

              <input type="number" maxlength='2' id='paragraphs' class='form-control' name="paragraphs" min='1' max='99' value=
              @if(!isset($data['paragraphs']))
              '0'
              @else
              {{ $data['paragraphs'] }}>
              @endif


              <label for='sentences' class='control-label'>Enter Number of Sentences/Paragraph:</label>

              <input type="number" maxlength='2' id='sentences' class='form-control' name="sentences" min='1' max='20' value=
              @if(!isset($data['sentences']))
              '4'
              @else
              {{ $data['sentences'] }}>
              @endif

            </div>
            <br>
              <button type="submit" class="btn btn-primary">Generate Text</button>
          </fieldset>
        </form>
      </div>
      <div class="col-sm-7 col-sm-offset-1">
        @if(!isset($data['paragraphs']))
        <p class="text-success">Try Me! - Just specify a number of paragraphs and hit 'Generate Text'<p>
        @else

        @foreach($data['faker'] as $k => $v)

        @foreach ($v as $key => $value)
        <p> {{ $value }} </p>
        @endforeach

        @endforeach
        @endif
      </div>

      @stop
