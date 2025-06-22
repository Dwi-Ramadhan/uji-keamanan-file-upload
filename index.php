<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstrasi Keamanan Upload File</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .aurora-background {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            z-index: -1;
            background-image: radial-gradient(circle at 30% 70%, rgba(5, 255, 159, 0.1), transparent 30%),
                radial-gradient(circle at 70% 30%, rgba(0, 123, 255, 0.15), transparent 35%);
            filter: blur(100px);
        }

        .text-glow {
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.2), 0 0 25px rgba(0, 191, 255, 0.2);
        }

        .btn-hover-effect {
            transition: all 0.3s ease;
        }

        .btn-hover-effect:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-200 flex items-center justify-center min-h-screen overflow-hidden">
    <div class="aurora-background"></div>

    <div class="text-center p-8 max-w-4xl mx-auto relative z-10">
        <div class="mb-8">
            <svg class="w-24 h-24 mx-auto text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <defs>
                    <linearGradient id="iconGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:rgb(34, 211, 238); stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(59, 130, 246); stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path stroke="url(#iconGradient)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                <path stroke="url(#iconGradient)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
        </div>

        <h1 class="text-4xl md:text-6xl font-black uppercase tracking-wider text-glow bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
            Demonstrasi Pengujian Keamanan
        </h1>
        <h2 class="text-2xl md:text-3xl font-bold mt-2 text-cyan-400">
            Fitur Upload File Pada Sistem Aplikasi Web
        </h2>

        <p class="mt-6 max-w-2xl mx-auto text-gray-400 text-lg">
            Sebuah analisis mendalam untuk mengidentifikasi dan memitigasi potensi kerentanan pada fungsionalitas upload file, memastikan integritas dan keamanan data sistem.
        </p>

        <div class="mt-12 flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="vulnerable.php" class="btn-hover-effect w-full sm:w-auto px-8 py-3 text-lg font-bold text-white bg-cyan-600 hover:bg-cyan-500 rounded-lg shadow-lg">
                Mulai Pengujian
            </a>
            <a href="#" class="btn-hover-effect w-full sm:w-auto px-8 py-3 text-lg font-bold text-cyan-300 bg-gray-800 hover:bg-gray-700 rounded-lg shadow-lg">
                Lihat Laporan
            </a>
        </div>
    </div>

    <footer class="absolute bottom-4 text-center w-full text-gray-600 text-sm">
        &copy; <?php echo date("Y"); ?> Keamanan Perangkat Lunak. Hak Cipta Dilindungi.
    </footer>

</body>

</html>