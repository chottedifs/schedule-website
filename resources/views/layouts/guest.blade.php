<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMK YAPPIKA SERPONG</title>
    @include('components.frontend.style')
</head>

<body>

    @include('components.frontend.navbar')

    @yield('content')

    @include('components.frontend.footer')

    @include('components.frontend.script')

    @stack('script')

</body>

</html>
