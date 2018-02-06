<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials._head')
<body>
@include('partials._nav')
<div class="container"> 
    @yield('content')
    @include('partials._footer')
</div>
@include('partials._javascript')
</body>
</html>