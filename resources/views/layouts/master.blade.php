<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'P3' --}}
        @yield('title','P3')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    {{--  bootstrap, fonts, theme --}}
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>

    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/flatly/bootstrap.min.css' rel='stylesheet'>

@yield('head')

</head>

<body>


    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">P3</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          @yield('navbar')
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section>

      @yield('content')

    </section>

    <footer>
      <br>
      <br>
        &copy; {{ date('Y') }} Ryan Kucinski
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

  </body>
</html>
