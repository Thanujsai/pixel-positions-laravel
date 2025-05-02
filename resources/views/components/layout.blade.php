<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">
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
            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    <div>
</body>
</html>