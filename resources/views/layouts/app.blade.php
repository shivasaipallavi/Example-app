<!DOCTYPE html>
<html>
    <head>
        <title>User Post -@yield('title')</title>
    </head>

    <body>
        <h1><font color="green">User Post</font> -@yield('title')</h1>
        @if($errors->any())
            <div>
                Errors:
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
            </div>
        @endif

        @if (session('message'))
            <p><b>{{ session('message') }}</b></p>
        @endif
        
        <div>
            @yield('content')
            
        </div>
    </body>
</html>