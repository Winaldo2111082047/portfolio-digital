<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Digital - Mahasiswa Programmer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-dark-bg text-text-light font-sans antialiased">

    @yield('content')

    <!-- Wadah Notifikasi Toast untuk formulir kontak -->
    <div id="notification-toast"
        class="hidden fixed top-5 left-1/2 -translate-x-1/2 px-6 py-3 rounded-lg shadow-lg z-50 text-dark-bg font-bold transition-opacity duration-300"
        role="alert">
        <p id="notification-message"></p>
    </div>

</body>

</html>
