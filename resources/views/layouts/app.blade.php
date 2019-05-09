<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('layouts.header')
    
    <body style="background: url('{{url('/images/bg.jpg')}}') no-repeat;">
        <div class="flex-center position-ref full-height">
            
            @include('layouts.menutop')
                
                @yield('content')
<!--                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->
            </div>
        </div>
    </body>
</html>
