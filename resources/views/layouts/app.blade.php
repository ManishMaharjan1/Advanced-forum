<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-dark.min.css">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        
        @if($errors->count() > 0)

            <ul class="list-group-item">
                
                @foreach($errors->all() as $error )

                    <li class="list-group-item text-danger">
                        
                        {{ $error }}
                        
                    </li>

                @endforeach
                
            </ul>

            <br>

            <br>

            <br> 

        @endif


        <div class="container">
            
            <div class="col-md-4">

                <a href="{{ route('discussions.create') }}" class="form-control btn btn-primary" >Create a new discussion</a>

                <br>
                
                <br>

                <div class="panel panel-default">
                
                    <div class="panel-body">
                
                        <ul class="list-group">
                    
                            <li class="list-group-item">
                            
                                <a href="/forum" style="text-decoration: none;">Home</a>
                                
                            
                            </li>

                            <li class="list-group-item">
                            
                                <a href="/forum?filter=me" style="text-decoration: none;">My discussions</a>
                            
                        
                            </li>

                            <li class="list-group-item">
                            
                                <a href="/forum?filter=solved" style="text-decoration: none;">Answered discussions</a>
                        
                    
                            </li>

                            <li class="list-group-item">
                            
                                <a href="/forum?filter=unsolved" style="text-decoration: none;">Unanswered discussions</a>
                        
                    
                            </li>

                        </ul>
                
                    </div>
            
                </div>

                @if(Auth::check()) 

                    @if(Auth::user()->admin)

                        <div class="panel-body">
                
                            <ul class="list-group">
            
                                <li class="list-group-item">
                    
                                    <a href="/channels" style="text-decoration: none;">All channnels</a>
                        
                    
                                </li>

                    

                            </ul>
        
                        </div>

                    @endif

                @endif
            
                <div class="panel panel-default">
                
                    <div class="panel-heading">
                    
                        Channels

                    </div>

                    <div class="panel-body">
                    
                        <ul class="list-group">
                        
                            @foreach($channels as $channel)

                                 <li class="list-group-item">
                                 
                                    <a href="{{ route('channel', ['slug' => $channel->slug ]) }}" style="text-decoration: none;">{{ $channel->title }}</a>

                                 </li>

                            @endforeach

                        </ul>
                    
                    </div>
                
                </div>

            </div>

            <div class="col-md-8">
            
                @yield('content')

            </div>
        
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
    
        @if(Session::has('success'))

            toastr.success('{{ Session::get('success') }}')

        @endif
    
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</body>
</html>
