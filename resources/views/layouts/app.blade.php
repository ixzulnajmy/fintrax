<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinTrax</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-white shadow p-4">
            <h1 class="text-xl font-bold">FinTrax Dashboard</h1>
        </nav>
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>