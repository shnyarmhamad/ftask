<!DOCTYPE html>
<!--test Github-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Sacramento&display=swap" rel="stylesheet">

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <style>
            body {
                background: linear-gradient(135deg, #ffeef8 0%, #f0fff4 100%);
                font-family: 'Poppins', sans-serif;
                min-height: 100vh;
                overflow-x: hidden;
                position: relative;
            }

            .celebration-title {
                font-family: 'Sacramento', cursive;
                font-size: 4.5rem;
                color: #d63384;
                text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            }

            /* --- Flower Petal Animation --- */
            .petals-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: 0;
                pointer-events: none;
            }

            .petal {
                position: absolute;
                background: #ffb7c5;
                border-radius: 150px 0px 150px 0px;
                opacity: 0.7;
                animation: float 8s linear infinite;
            }

            @keyframes float {
                0% { transform: translateY(-10%) rotate(0deg); opacity: 0; }
                10% { opacity: 0.8; }
                90% { opacity: 0.8; }
                100% { transform: translateY(110vh) rotate(720deg); opacity: 0; }
            }

            /* --- CSS Birthday Cake --- */
            .cake-container {
                position: relative;
                height: 200px;
                width: 200px;
                margin: 40px auto;
            }

            .cake {
                position: absolute;
                bottom: 0;
                width: 160px;
                height: 90px;
                background: #f194b4;
                border-radius: 10px 10px 0 0;
                left: 20px;
                box-shadow: inset 0 -10px 0 rgba(0,0,0,0.05);
            }

            .cake::before {
                content: "";
                position: absolute;
                top: 30px;
                left: 0;
                width: 100%;
                height: 12px;
                background: #fff;
            }

            .candle {
                position: absolute;
                bottom: 90px;
                left: 93px;
                width: 14px;
                height: 40px;
                background: linear-gradient(to right, #64b5f6, #2196f3);
                border-radius: 3px 3px 0 0;
            }

            .flame {
                position: absolute;
                bottom: 130px;
                left: 95px;
                width: 10px;
                height: 18px;
                background: #ff9800;
                border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
                animation: flicker 0.6s ease-in-out infinite alternate;
                transform-origin: bottom center;
            }

            @keyframes flicker {
                0% { transform: scale(1) rotate(-2deg); background: #ff9800; }
                100% { transform: scale(1.1) rotate(2deg); background: #ff5722; box-shadow: 0 0 10px #ff9800; }
            }

            .birthday-card {
                z-index: 10;
                border: none;
                border-radius: 20px;
                backdrop-filter: blur(5px);
                background: rgba(255, 255, 255, 0.85);
            }
        </style>
    </head>
    <body>

        <div class="petals-container">
            <div class="petal" style="width:15px; height:20px; left:10%; animation-delay:0s; animation-duration:9s;"></div>
            <div class="petal" style="width:20px; height:25px; left:30%; animation-delay:2s; animation-duration:12s; background:#ffccd5;"></div>
            <div class="petal" style="width:12px; height:18px; left:55%; animation-delay:1s; animation-duration:8s;"></div>
            <div class="petal" style="width:18px; height:22px; left:75%; animation-delay:4s; animation-duration:11s; background:#fff0f3;"></div>
            <div class="petal" style="width:15px; height:20px; left:90%; animation-delay:3s; animation-duration:10s;"></div>
        </div>

        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="text-center col-md-8 col-lg-6">
                
                <div class="birthday-card shadow-lg p-5">
                    <div class="cake-container">
                        <div class="flame"></div>
                        <div class="candle"></div>
                        <div class="cake"></div>
                    </div>

                    <h1 class="celebration-title mb-2">Happy Birthday!</h1>
                    <p class="lead text-muted mb-4">Wishing you an amazing day filled with joy, love, and clean code.</p>
                    
                    <hr class="my-4" style="border-color: #ffccd5;">
                    
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="{{ url('/') }}" class="btn btn-outline-danger btn-lg px-4 rounded-pill">
                            Go to Dashboard
                        </a>
                    </div>
                </div>
                
                <p class="text-muted mt-4 small" style="z-index: 10; position: relative;">
                    Crafted dynamically in Laravel Blade 🌸
                </p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
