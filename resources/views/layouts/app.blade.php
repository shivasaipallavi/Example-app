<!DOCTYPE html>
<html>
    <head>
        <title>any title -@yield('title')</title>
    </head>

    <body>
        <h1><font color="green">Page Title</font> -@yield('title')</h1>
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
        @if ($errors->any())
        <div>
            Errors:
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
         @endif

         <form action ="{{ route('logout') }}" method="POST">
            @csrf
            <button>logout</button>
        </form>

        </body>
</html>