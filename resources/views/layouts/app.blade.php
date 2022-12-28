<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        SMK YAPPIKA SERPONG
    </title>

    @include('components.admin.style')

</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('components.admin.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('components.admin.navbar')

        @yield('content')
    </main>

    @include('components.admin.script')

</body>

</html>
