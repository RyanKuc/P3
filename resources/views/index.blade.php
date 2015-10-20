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
          <li><a href="#">P1</a></li>
          <li class="divider"></li>
          <li><a href="#">P2</a></li>
          <li class="divider"></li>
          <li><a href="#">P4</a></li>
        </ul>
      </li>
    </ul>

@stop
