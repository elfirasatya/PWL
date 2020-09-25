<html>
<body>
    <div id="app">
        @section('sidebar')
        ini adalah master sidebar
        @show
        <main class="py-4">
            @yield('content')
        </main>
        <main class='py-4'>
            <p align="center">Perkenalkan Saya Elfira Satya Pramesti  1391710014<br>
        </main>
        <main class='py-4'>
            <br>
            <p align="center">About : </p>
            @extends('about')
        </main>
    </div>
</body>
</html>
