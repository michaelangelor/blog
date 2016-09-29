<!DOCTYPE html>
<html lang="en">

<head>
@include('partial.head')
@include('partial.style')
    <title>Blog Home @yield('title')</title>
</head>
@include('partial.navigation')
<body>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @include('partial.message')
            @yield('content')
        </div>
        <div class="col-md-4">
            @include('partial.side')
        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
      @include('partial.footer')
    </footer>

</div>
<!-- /.container -->
@include('partial.script')
</body>

</html>