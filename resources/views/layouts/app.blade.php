<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App name - @yield('title', 'Personal')</title>
   @section('links')
        <link rel="stylesheet" href="{{ asset('/app.css') }}">       
   @show 
</head>
<body>
    <div class="wrapper">
    @section('header')
        <header>

        </header>
    @show
    
    @section('content')
        <main>
            <div class="content">
                {{-- content --}}
            </div>
            <div class="right">
                {{-- sidebar --}}
            </div>
        </main>
    @show
        
    @section('footer')
        <footer>
                
        </footer>    
    @show
    </div>
</body>
</html>