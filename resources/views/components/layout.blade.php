<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600; &display=swap" rel="stylesheet">

</head>
<body class="bg-black text-white font-hankenGrotesk" style="font-family: 'Hanken Grotesk', sans-serif;">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions Logo" width="100" height="100">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#" class="hover:text-amber-700 transition-colors duration-300">Jobs</a>
                <a href="#" class="hover:text-amber-700 transition-colors duration-300">Careers</a>
                <a href="#" class="hover:text-amber-700 transition-colors duration-300">Salaries</a>
                <a href="#" class="hover:text-amber-700 transition-colors duration-300">Companies</a>
            </div>
            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create" class="hover:text-amber-700 transition-colors duration-300">Post a Job</a>
                    <form method = "POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button class="hover:text-amber-700 transition-colors duration-300 cursor-pointer">Log Out</button>
                    </form>

                </div>
            @endauth

            @guest
            <div class="space-x-6 font-bold">
                <a href="/register" class="hover:text-amber-700 transition-colors duration-300">Sign Up</a>
                <a href="/login" class="hover:text-amber-700 transition-colors duration-300">Log In</a>
            </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    <div>
</body>
</html>