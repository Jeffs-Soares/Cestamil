<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cestamil</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])

    {{--    Script to add function the button --}}
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="px-64">

<main>

    <x-dash.home>
        {{ $slot }}
    </x-dash.home>



</main>

</body>
</html>
