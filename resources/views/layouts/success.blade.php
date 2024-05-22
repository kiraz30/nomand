<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <!-- style -->
    @include('includes.style')
  </head>
<body>
    <!-- navbar -->
    @include('includes.navbar-alt')
    <!-- end navbar -->

    <!-- memanggil section content dari page home -->
    @yield('content') 
<!-- script -->
@include('includes.script')
</body>
</html>
