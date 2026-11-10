<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - TugasKu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="min-h-screen text-white"
      style="background: linear-gradient(rgba(30,27,75,0.65), rgba(30,27,75,0.65)),
             url('{{ asset('images/kampus.webp') }}') center / cover fixed;">

    <x-navbar :username="$username ?? ''" />

    <main class="max-w-5xl mx-auto p-6">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>