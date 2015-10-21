  @extends('layouts.master')

  @section('title')
  Random User Generator
  @stop


  @section('head')
  <link href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" type='text/css' rel='stylesheet'>
  @stop
  @section('navbar')

  <ul class="nav navbar-nav">
    <li class="active"><a href="#"> Random User Generator <span class="sr-only">(current)</span></a></li>
    <li><a href="/lorem">Lorem Ipsum Generator</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Other CSCI E-15 Projects
        <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="http://P1.ryankucinski.com">P1</a></li>
        <li><a href="https://github.com/RyanKuc/P1.git">Github</a></li>
        <li class="divider"></li>
        <li><a href="http://P2.ryankucinski.com">P2</a></li>
        <li><a href="https://github.com/RyanKuc/P2.git">Github</a></li>
        <li class="divider"></li>
        <li><a href="http://P4.ryankucinski.com">P4</a></li>
        <li><a href="https://github.com/RyanKuc/P4.git">Github</a></li>
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
        <form method="POST" action="/user" class="form-horizontal">
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <fieldset>
            <legend>Random User Generator</legend>
            <div class="form-group">
            <label for='users' class='control-label'>Enter Number of Users: (max:99)</label>

            <input type="number" id='users' class='form-control' name='users' min='1' max='99' value=
            @if(!isset($data['users']))
            '0'
            @else
            {{ $data['users'] }}
            @endif>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Generate Users</button>

          </fieldset>
        </form>
      </div>
      <div class='col-sm-7 col-sm-offset-1'>
        <table id="userlist" class="display table-bordered" cellspacing="0">
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


            @if(!isset($data['users']))
            <p class="text-success">Try Me! - Just specify a number of users and hit 'Generate Users'<p>
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
      </div>
    </div>

    @stop

    @section('body')
    <script> $(document).ready(function() {
      $('#userlist').DataTable();
    } );
    </script>
    <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    @stop
