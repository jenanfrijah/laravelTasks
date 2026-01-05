<!DOCTYPE html>
<html lang="en">
@include ('layout.head')
<body class="sb-nav-fixed">
@include('layout.header')
<div id="layoutSidenav">
      @include('layout.sidebar')
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
        @include('layout.footer')
    </div>
</div>
</body>
</html>