<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Happy 22nd Birthday Shnyar Gyan!</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Sacramento&display=swap" rel="stylesheet">

        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <style>
            body {
                background: #020204; /* Pitch black for glowing effects */
                font-family: 'Poppins', sans-serif;
                min-height: 100vh;
                overflow-x: hidden;
                position: relative;
            }

            /* Fast Pulsing Text */
            .celebration-title {
                font-family: 'Sacramento', cursive;
                font-size: 5.5rem;
                color: #ff66b2;
                text-shadow: 0 0 10px #ff66b2, 0 0 30px #ff66b2, 0 0 50px #ff007f;
                animation: pulseText 1s infinite alternate linear;
            }

            .age-badge {
                font-size: 2.2rem;
                font-weight: 700;
                color: #ffd700;
                text-shadow: 0 0 15px #ffd700, 0 0 30px #ff9100;
                letter-spacing: 2px;
                animation: spinBadge 3s infinite linear;
            }

            @keyframes pulseText {
                0% { transform: scale(0.96); text-shadow: 0 0 10px #ff66b2, 0 0 20px #ff007f; }
                100% { transform: scale(1.04); text-shadow: 0 0 30px #ff66b2, 0 0 50px #ff007f, 0 0 80px #ff007f; }
            }

            /* --- RAPID PURE CSS FIREWORKS --- */
            .firework-container {
                position: fixed;
                top: 0; left: 0; width: 100%; height: 100%;
                pointer-events: none;
                z-index: 2;
            }

            .firework {
                position: absolute;
                width: 6px;
                height: 6px;
                border-radius: 50%;
                animation: explode 2.5s infinite ease-in-out; /* Faster explosions! */
            }

            /* Fast Firework Burst Positions */
            .fw1 { left: 15%; top: 25%; background: #ff007f; box-shadow: 0 0 20px #ff007f; animation-delay: 0s; }
            .fw2 { left: 85%; top: 20%; background: #ffd700; box-shadow: 0 0 20px #ffd700; animation-delay: 0.6s; }
            .fw3 { left: 50%; top: 35%; background: #00e5ff; box-shadow: 0 0 20px #00e5ff; animation-delay: 1.2s; }
            .fw4 { left: 30%; top: 60%; background: #9c27b0; box-shadow: 0 0 20px #9c27b0; animation-delay: 1.8s; }
            .fw5 { left: 70%; top: 65%; background: #4caf50; box-shadow: 0 0 20px #4caf50; animation-delay: 0.3s; }

            @keyframes explode {
                0% { transform: scale(1); opacity: 1; box-shadow: 0 0 0px transparent; }
                15% { transform: scale(1); opacity: 1; }
                35% {
                    opacity: 1;
                    box-shadow: 
                        -50px -50px 0 #ff007f, 50px -50px 0 #00e5ff, 
                        -50px 50px 0 #ffd700, 50px 50px 0 #ff66b2,
                        0px -70px 0 #fff, 0px 70px 0 #ff4081,
                        -70px 0px 0 #00ffcc, 70px 0px 0 #ffff00,
                        -90px -30px 2px #ff007f, 90px 30px 2px #ffd700,
                        -30px -90px 1px #9c27b0, 30px 90px 1px #4caf50;
                    transform: scale(3);
                }
                70% { opacity: 0; transform: scale(4.5); }
                100% { opacity: 0; transform: scale(1); }
            }

            /* --- HYPER-FAST BLIZZARD FLOWER STORM --- */
            .petals-container {
                position: fixed;
                top: 0; left: 0; width: 100%; height: 100%;
                overflow: hidden; z-index: 1; pointer-events: none;
            }

            .petal {
                position: absolute;
                background: linear-gradient(135deg, #ffb7c5, #ff66b2);
                border-radius: 150px 0px 150px 0px;
                opacity: 0.9;
                /* Animation time dropped to 2-3 seconds for high velocity fall */
                animation: floatDown 2.5s linear infinite; 
            }

            @keyframes floatDown {
                0% { transform: translateY(-15%) rotate(0deg) translateX(0); opacity: 0; }
                10% { opacity: 1; }
                90% { opacity: 1; }
                100% { transform: translateY(115vh) rotate(1800deg) translateX(150px); opacity: 0; }
            }

            /* Rapid Flash Sparkles */
            .sparkle {
                position: absolute;
                background: #fff;
                border-radius: 50%;
                box-shadow: 0 0 10px #fff, 0 0 20px #ffeb3b;
                animation: flash 0.6s infinite alternate ease-in-out; /* Super fast flash! */
            }

            @keyframes flash {
                0% { opacity: 0.1; transform: scale(0.3); }
                100% { opacity: 1; transform: scale(1.6); }
            }

            /* --- CAKE DESIGN --- */
            .cake-container {
                position: relative;
                height: 250px;
                width: 250px;
                margin: 10px auto 25px auto;
            }

            .plate {
                width: 240px; height: 15px; background: #f5f5f5; border-radius: 10px;
                position: absolute; bottom: 10px; left: 5px;
                box-shadow: 0 0 30px rgba(255, 255, 255, 0.4);
            }

            .cake-bottom {
                position: absolute; bottom: 25px; left: 25px; width: 200px; height: 70px;
                background: #ff4081; border-radius: 12px 12px 0 0;
                box-shadow: inset 0 -15px 0 rgba(0,0,0,0.15);
            }

            .cake-top {
                position: absolute; bottom: 95px; left: 50px; width: 150px; height: 60px;
                background: #f50057; border-radius: 10px 10px 0 0;
                box-shadow: inset 0 -10px 0 rgba(0,0,0,0.15);
            }

            .frosting {
                width: 100%; height: 18px; background: #ffffff; border-radius: 10px 10px 0 0; position: absolute; top: 0;
            }

            .candle {
                position: absolute; bottom: 155px; left: 118px; width: 14px; height: 50px;
                background: linear-gradient(to right, #00e5ff, #00b0ff); border-radius: 4px 4px 0 0;
            }

            .flame {
                position: absolute; bottom: 205px; left: 113px; width: 24px; height: 34px;
                background: #ffeb3b; border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
                animation: flicker 0.2s ease-in-out infinite alternate; /* Hyperactive flame */
                transform-origin: bottom center;
                box-shadow: 0 0 30px #ff9100, 0 0 60px #ff3d00, 0 0 90px #ff3d00;
            }

            @keyframes flicker {
                0% { transform: scale(0.9) rotate(-6deg); }
                100% { transform: scale(1.3) rotate(6deg); }
            }

            /* Glowing Glassmorphism Card */
            .birthday-card {
                z-index: 10;
                border: 2px solid rgba(255, 102, 178, 0.4);
                border-radius: 30px;
                backdrop-filter: blur(20px);
                background: rgba(10, 10, 15, 0.88);
                box-shadow: 0 30px 80px rgba(0, 0, 0, 0.9), 0 0 60px rgba(255, 0, 127, 0.4);
            }
        </style>
    </head>
    <body>

        <!-- HIGH FREQUENCY FIREWORKS LAYER -->
        <div class="firework-container">
            <div class="firework fw1"></div>
            <div class="firework fw2"></div>
            <div class="firework fw3"></div>
            <div class="firework fw4"></div>
            <div class="firework fw5"></div>
        </div>

        <!-- DOUBLE DENSITY MASSIVE FAST FLOWER STORM -->
        <div class="petals-container">
            <!-- 22 Fast-paced falling petals to match your 22nd age! -->
            <div class="petal" style="width:18px; height:24px; left:2%; animation-delay:0s; animation-duration:2s;"></div>
            <div class="petal" style="width:25px; height:30px; left:8%; animation-delay:0.8s; animation-duration:2.5s; background:#ff80ab;"></div>
            <div class="petal" style="width:14px; height:20px; left:14%; animation-delay:0.3s; animation-duration:1.8s;"></div>
            <div class="petal" style="width:22px; height:28px; left:20%; animation-delay:1.2s; animation-duration:2.2s; background:#ff4081;"></div>
            <div class="petal" style="width:16px; height:22px; left:27%; animation-delay:0s; animation-duration:2s;"></div>
            <div class="petal" style="width:26px; height:32px; left:35%; animation-delay:1.5s; animation-duration:2.7s; background:#ff80ab;"></div>
            <div class="petal" style="width:15px; height:21px; left:42%; animation-delay:0.5s; animation-duration:1.9s;"></div>
            <div class="petal" style="width:20px; height:26px; left:48%; animation-delay:1.1s; animation-duration:2.4s; background:#ff4081;"></div>
            <div class="petal" style="width:13px; height:19px; left:54%; animation-delay:0.2s; animation-duration:2.1s;"></div>
            <div class="petal" style="width:24px; height:30px; left:60%; animation-delay:1.6s; animation-duration:2.6s; background:#ff80ab;"></div>
            <div class="petal" style="width:17px; height:23px; left:66%; animation-delay:0.7s; animation-duration:2s;"></div>
            <div class="petal" style="width:21px; height:27px; left:72%; animation-delay:1.3s; animation-duration:2.3s;"></div>
            <div class="petal" style="width:15px; height:22px; left:78%; animation-delay:0.4s; animation-duration:1.7s; background:#ff4081;"></div>
            <div class="petal" style="width:23px; height:29px; left:84%; animation-delay:1.4s; animation-duration:2.5s;"></div>
            <div class="petal" style="width:16px; height:20px; left:90%; animation-delay:0.1s; animation-duration:2.2s;"></div>
            <div class="petal" style="width:19px; height:25px; left:96%; animation-delay:0.9s; animation-duration:1.9s; background:#ff80ab;"></div>
        </div>

        <!-- FAST FLASHING SPARKLES -->
        <div class="petals-container">
            <div class="sparkle" style="width:6px; height:6px; left:5%; top:20%; animation-delay:0s;"></div>
            <div class="sparkle" style="width:8px; height:8px; left:25%; top:65%; animation-delay:0.2s;"></div>
            <div class="sparkle" style="width:5px; height:5px; left:45%; top:15%; animation-delay:0.4s;"></div>
            <div class="sparkle" style="width:8px; height:8px; left:75%; top:75%; animation-delay:0.1s;"></div>
            <div class="sparkle" style="width:9px; height:9px; left:92%; top:35%; animation-delay:0.3s;"></div>
        </div>

        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="text-center col-md-10 col-lg-8">
                
                <div class="birthday-card p-5">
                    
                    <!-- THE CAKE WITH VIBRANT LIT CANDLE -->
                    <div class="cake-container">
                        <div class="flame"></div>
                        <div class="candle"></div>
                        <div class="cake-top">
                            <div class="frosting"></div>
                        </div>
                        <div class="cake-bottom">
                            <div class="frosting"></div>
                        </div>
                        <div class="plate"></div>
                    </div>

                    <!-- GREETINGS AND AGE LOGO -->
                    <div class="age-badge mb-1">AGE: 22 ✨</div>
                    <h1 class="celebration-title mb-3">Happy Birthday Shnyar Gyan!</h1>
                    
                    <p class="lead text-light opacity-75 mb-4 px-md-4">
                        Turn up the tempo! May your 22nd year flash with incredible moments, rapid success, and absolutely flawless deployments! ⚡🌸🚀
                    </p>
                    
                    <hr class="my-4" style="border-color: rgba(255,102,178,0.5);">
                    
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="{{ url('/') }}" class="btn btn-danger btn-lg px-5 rounded-pill shadow-lg border-0" style="background: linear-gradient(45deg, #ff007f, #ff4081); font-weight: 600; letter-spacing: 1px;">
                            Enter High-Speed Dashboard ⚡
                        </a>
                    </div>
                </div>
                
                <p class="text-secondary mt-4 small" style="z-index: 10; position: relative;">
                    Maximum Performance Celebration Engine Powered Up 🏎️💨
                </p>
            </div>
        </div>

        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
