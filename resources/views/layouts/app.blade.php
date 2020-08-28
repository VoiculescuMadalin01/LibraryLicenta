<!doctype html>
<html lang="en">

<head>
  <title>Bibliotca din Babana</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="/" class="simple-text logo-normal">
          Babana Library
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('book.index') }}">
              <i class="material-icons">Book</i>
              <p>Books</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="{{route('book.create')}}">
              <i class="material-icons">add</i>
              <p>Add book</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar">sss</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
          
              @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item ">
                                <a  class="nav-link " href="#" >
                                    {{ Auth::user()->name }} 
                                </a>
                            </li>    
                            <li class="nav-item">
                                <form class="nav-link" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    
                                        <input type="submit"  class="btn btn-primary" value="Logout">
                                </form>

                                    
                                
                            </li>
                        @endguest
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="/">
                  Babana Library
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, provided with <i class="material-icons">favorite</i> by
            <a href="/" target="_blank">Primaria Babana</a> 
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  <script type="application/javascript" src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>