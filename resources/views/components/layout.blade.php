@php use Illuminate\Support\Facades\Vite; @endphp
    <!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Pixel positions</title>
</head>

<body class="bg-black font-hanken-grotesk text-white pb-20">

<div class="px-10">

    <nav class="flex items-center justify-between border-b border-white/10 py-4">

        <div>
            <a href="/">
                <img src="{{ Vite::asset('/resources/images/logo.svg') }}" alt='logo'>
            </a>
        </div>


        <x-links-menu-wrapper>

            <x-links-menu href="#">Jobs</x-links-menu>
            <x-links-menu href="#">Careers</x-links-menu>
            <x-links-menu href="#">Salaries</x-links-menu>
            <x-links-menu href="#">Companies</x-links-menu>

        </x-links-menu-wrapper>


        @auth

            <x-links-menu-wrapper>

                <x-links-menu href="/jobs/create">
                    Post a Job
                </x-links-menu>
                
                <x-links-menu href="/logout">Log Out</x-links-menu>

            </x-links-menu-wrapper>

        @endauth

        @guest

            <x-links-menu-wrapper>
                <x-links-menu href="/register">Sign Up</x-links-menu>
                <x-links-menu href="/login">Log In</x-links-menu>
            </x-links-menu-wrapper>

        @endguest


    </nav>

    <main class="mx-auto mt-10 max-w-[986px]">
        {{ $slot }}
    </main>

</div>

</body>

</html>
