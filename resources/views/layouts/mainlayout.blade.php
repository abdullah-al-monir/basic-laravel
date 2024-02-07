<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Project | @yield('title','Home')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body >
    <header>@include('pages.header')</header>
    <section class="min-h-[calc(100vh-124px)] max-w-screen-xl mx-auto px-5">
        @hasSection('content')
            @yield('content')
        @else
            {!! View::make('pages.home') !!}
        @endif
    </section>
    <footer>@include('pages.footer')</footer>
</body>

</html>
