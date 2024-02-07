<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Project | @yield('title', 'Home')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-slate-500">
    <header>
        @include('pages.header')
    </header>

    @php
        $pageIdentifier = $pageIdentifier ?? 'default';
        $bgColor = '';

        switch ($pageIdentifier) {
            case 'home':
                $bgColor = 'bg-red-200';
                break;
            case 'about':
                $bgColor = 'bg-blue-200';
                break;
            case 'post':
                $bgColor = 'bg-green-200';
                break;
            default:
                $bgColor = 'bg-yellow-200';
        }
    @endphp

    <section style="min-height: calc(100vh - 124px);" class=" max-w-screen-xl mx-auto px-5 {{ $bgColor }}">
        @hasSection('content')
            @yield('content')
        @else
            {!! View::make('pages.home') !!}
        @endif
    </section>

    <footer>
        @include('pages.footer')
    </footer>
    @stack('script')
</body>

</html>
