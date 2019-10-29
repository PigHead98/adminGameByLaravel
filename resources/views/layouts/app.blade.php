<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>

        @include('layouts.header')
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
@include('layouts.script')
</html>
