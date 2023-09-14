<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPOS RUS</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    @yield('style')
</head>

<body>
    @yield('content')

    @yield('script')
    @stack('script')
</body>

</html>