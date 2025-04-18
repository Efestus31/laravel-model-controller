<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>
    <header class="bg-dark text-white p-3">
        <div class="container">
            <h1 class="mb-0">My Movie List</h1>
        </div>
    </header>

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="bg-light text-center py-3 mt-auto">
        <small>Made with ❤️ using Laravel & Bootstrap</small>
    </footer>
</body>
</html>