<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MREC - Metaverse Research and Experience Center</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/page-wipe.css') }}">

    <!-- Config Font Custom CDN -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sora: ['Sora', 'sans-serif'],
                        hanken: ['"Hanken Grotesk"', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-800 antialiased font-hanken">
    <div id="pageWipe" aria-hidden="true">
    <div class="panel"></div>
    <div class="ring"></div>
    <div class="mark"></div>
</div>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    {{-- Tampilkan footer KECUALI jika di halaman /login --}}
    @unless (Request::is('login'))
        @include('components.footer')
    @endunless

    <script src="{{ asset('js/page-wipe.js') }}"></script>
</body>
</html>