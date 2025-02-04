<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? env('APP_NAME') }}</title>
        @vite('resources/css/app.css')

        @isset($earlyAssetLoad)
            {!! $earlyAssetLoad !!}
        @endisset
    </head>

    <body class="bg-gray-100 font-sans">

    @include('layouts.front.nav')

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-16 text-center">
    {{ $slot }}
    </main>

    <!-- Footer -->
    @include('layouts.front.footer')

    <!-- JavaScript for Hamburger Menu -->
    @isset($js)
        <script>
            {{$js}}
        </script>
    @endisset

    @isset($lateAssetLoad)
        {!! $lateAssetLoad !!}
    @endisset
    </body>
</html>
