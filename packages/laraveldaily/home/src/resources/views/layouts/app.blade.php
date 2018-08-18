<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('home::layouts.head')

<body>
    <div id="main-wrapper">
        <header id="header">
          @include('home::layouts.header')
        </header>
        
        @yield('content')
        
        <footer id="footer">
          @include('home::layouts.footer')
        </footer>
    </div>
    @include('home::includes.inc-footer-scripts')
</body>
</html>
