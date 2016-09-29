<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#laravel-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel-Blog</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="laravel-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a class="@yield('activeHome')" href="{{URL::to('/')}}">Home</a>
                </li>
                <li>
                    <a class="@yield('activeContact')" href="{{URL::to('contact')}}">Contact</a>
                </li>
                <li>
                    <a class="@yield('activeAbout')" href="{{URL::to('about')}}">About</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
