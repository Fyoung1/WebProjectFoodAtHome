<!doctype html>
<html lang="en">

<header style="background: #4a5568;position: fixed;top: 0;width: 100%;height: 8%;z-index: 1000;">
    @include('layouts.partials.navbar')
</header>

<body style="margin: 0;padding: 0;width: 100%;height: 100%">
<main class="container">
    @yield('content')
    @include('layouts.catalog')
    @yield('cart')
</main>
</body>
<footer>
</footer>
</html>

<style>
    .container {
        width: 100%;
        height: 100%;
        top:76px;
        position: relative;
    }

</style>
