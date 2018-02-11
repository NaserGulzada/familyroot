<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials._head')
<body>
@include('partials._nav')
<div class="container"> 
    @include('partials.messages')
    @yield('content')
    @include('partials._footer')
</div>
@include('partials._javascript')
@yield('scripts')
</body>
</html>