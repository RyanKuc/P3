  @extends('layouts.master')

  @section('title')
  P3 CSCI E-15 Dynamic Web Applications
  @stop

  @section('navbar')

      <ul class="nav navbar-nav">
        <li><a href="/user"> Random User Generator <span class="sr-only">(current)</span></a></li>
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
  <div class="container-fluid">
  <h1>Developer's Best Friend<h1>

    <div class="jumbotron">
      <h2 class="text-success">Lorem Ipsum Generator</h2>
      <blockquote>In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.</blockquote>
      <p>Create random filler text for your applications.</p>
      <p><a href="/lorem" class="btn btn-success btn-lg">Generate Text</a></p>
  </div>
  <div class="jumbotron">
    <h2 class="text-success">Random User Generator</h2>
    <p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>
    <p><a href="/user" class="btn btn-success btn-lg">Generate Users</a></p>
  </div>

  </div>


  @stop
