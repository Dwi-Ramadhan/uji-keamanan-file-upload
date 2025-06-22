<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYSTEM BREACHED</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Share Tech Mono', monospace;
            --tw-bg-opacity: 1;
            background-color: rgb(17 24 39 / var(--tw-bg-opacity));
        }

        .matrix-bg {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            background-image:
                linear-gradient(rgba(17, 24, 39, 0.95), rgba(17, 24, 39, 0.95)),
                url('https://www.transparenttextures.com/patterns/black-felt.png');
            opacity: 0.3;
        }

        .text-glow-green {
            text-shadow: 0 0 5px rgba(52, 211, 153, 0.7),
                0 0 10px rgba(52, 211, 153, 0.5),
                0 0 20px rgba(52, 211, 153, 0.3);
        }

        .text-glow-red {
            text-shadow: 0 0 8px rgba(239, 68, 68, 0.8),
                0 0 15px rgba(239, 68, 68, 0.5);
        }

        .cursor-blink {
            animation: blink 1s step-end infinite;
        }

        @keyframes blink {

            from,
            to {
                color: transparent;
            }

            50% {
                color: #34d399;
            }
        }
    </style>
</head>

<body class="bg-gray-900 text-green-400 flex items-center justify-center min-h-screen p-4">
    <div class="matrix-bg"></div>

    <div class="w-full max-w-5xl mx-auto border-2 border-green-500/30 bg-gray-900/50 backdrop-blur-sm p-6 md:p-8 shadow-2xl shadow-green-500/10 relative z-10">

        <div class="flex flex-col md:flex-row items-center justify-between mb-6 border-b border-green-500/30 pb-4">
            <div class="flex items-center">
                <svg class="w-10 h-10 mr-4 text-green-400 text-glow-green" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                    <path d="M15.5 8C16.33 8 17 7.33 17 6.5S16.33 5 15.5 5 14 5.67 14 6.5 14.67 8 15.5 8zm-7 0C9.33 8 10 7.33 10 6.5S9.33 5 8.5 5 7 5.67 7 6.5 7.67 8 8.5 8zm3.5 12c-2.33 0-4.31-1.46-5.11-3.5h10.22c-.8 2.04-2.78 3.5-5.11 3.5z" />
                    <path d="M12 12c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" />
                </svg>
                <h1 class="text-2xl md:text-3xl text-glow-green uppercase">System Compromised</h1>
            </div>
            <div class="text-red-500 text-lg mt-2 md:mt-0">
                STATUS: <span class="font-bold text-glow-red">SECURITY BREACH</span>
            </div>
        </div>

        <div class="my-8 text-center">
            <h2 class="text-4xl md:text-6xl text-white font-bold text-glow-green uppercase tracking-widest">Your Security is an Illusion</h2>
            <p class="mt-4 text-xl text-gray-400">Kami telah mengambil alih kendali. Semua data Anda kini menjadi milik kami.</p>
        </div>

        <div class="my-8 text-center bg-black/50 border-2 border-red-500/50 p-6 shadow-2xl shadow-red-500/20">
            <h3 class="text-xl md:text-2xl text-red-400 uppercase font-bold text-glow-red tracking-wider">Time is Running Out</h3>

            <div class="flex justify-center items-center gap-2 md:gap-4 my-4 text-white">
                <div class="text-center p-2">
                    <div class="text-5xl md:text-7xl font-bold bg-clip-text text-transparent bg-gradient-to-b from-gray-200 to-gray-500">47</div>
                    <div class="text-sm uppercase text-green-400 tracking-widest">Hours</div>
                </div>
                <div class="text-5xl md:text-7xl font-bold text-green-400">:</div>
                <div class="text-center p-2">
                    <div class="text-5xl md:text-7xl font-bold bg-clip-text text-transparent bg-gradient-to-b from-gray-200 to-gray-500">59</div>
                    <div class="text-sm uppercase text-green-400 tracking-widest">Minutes</div>
                </div>
                <div class="text-5xl md:text-7xl font-bold text-green-400">:</div>
                <div class="text-center p-2">
                    <div class="text-5xl md:text-7xl font-bold bg-clip-text text-transparent bg-gradient-to-b from-gray-200 to-gray-500">13</div>
                    <div class="text-sm uppercase text-green-400 tracking-widest">Seconds</div>
                </div>
            </div>

            <p class="text-gray-300 mt-4">Data Anda akan dipublikasikan saat waktu habis. Untuk mencegahnya, kirim <span class="text-green-300 font-bold">50 BTC</span>.</p>

            <div class="mt-4 bg-gray-900 p-3 border border-green-500/30 text-green-400 break-all text-xs md:text-base">
                bc1qxy2kgdygjrsqtzq2n0yrf2493p83kkfjhx0wlh
            </div>
        </div>

        <div class="text-center mt-8">
            <p class="text-lg text-white">Ini bukan pengujian. Ini adalah peringatan.</p>
            <p class="text-xl mt-2 text-red-500 font-bold text-glow-red">Jangan mencoba melakukan perlawanan. Kami mengawasi.</p>
            <div class="mt-4 text-2xl text-white flex items-center justify-center">
                > GOODBYE <span class="w-4 h-6 bg-green-400 ml-2 cursor-blink"></span>
            </div>
        </div>

    </div>

</body>

</html>