<!DOCTYPE html>
<html lang="en">

<head>
    <x-layouts.head />
    <title></title>
</head>

<body>
    <header>
        <x-layouts.nav />
    </header>
    <x-alert />
    @yield('content')
</body>

</html>
