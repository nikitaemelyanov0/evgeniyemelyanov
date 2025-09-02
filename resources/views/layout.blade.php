<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">  
    <link rel="icon" href="favicon.ico">
    <meta name="description" content="Эффективная профессиональная психологическая помощь с использованием современных научно обоснованных методов: когнитивно-поведенческой терапии (КПТ) и других эффективных техник и методик.">  
</head>
<body>
    
    @include('components.header')
    
    @yield('content')

    @include('components.footer')
    
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>