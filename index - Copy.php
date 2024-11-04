<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Priasigma - Ninja Tech World</title>
    
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        /* Naruto Theme Colors */
        :root {
            --orange: #FF6B00;
            --black: #1a1a1a;
            --red: #E84A5F;
            --blue: #2E86AB;
            --scroll-color: #FF6B00;
        }

        /* Custom Cursor */
        body {
            cursor: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgMmM1LjUxNCAwIDEwIDQuNDg2IDEwIDEwcy00LjQ4NiAxMC0xMCAxMFMyIDI3LjUxNCAyIDE3IDYuNDg2IDcgMTIgN3oiIGZpbGw9IiNGRjZCMDAiLz48L3N2Zz4='), auto;
        }

        /* Background Animation */
        .ninja-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://i.ibb.co/JvPm0HY/naruto-pattern.png');
            opacity: 0.1;
            animation: scrollBg 20s linear infinite;
            z-index: -1;
        }

        @keyframes scrollBg {
            from { background-position: 0 0; }
            to { background-position: 100% 100%; }
        }

        /* Naruto Scroll Effect */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48Y2lyY2xlIGN4PSIxMCIgY3k9IjEwIiByPSI4IiBmaWxsPSJub25lIiBzdHJva2U9IiNGRjZCMDAiIHN0cm9rZS13aWR0aD0iMiIvPjwvc3ZnPg==');
        }

        ::-webkit-scrollbar-thumb {
            background: var(--scroll-color);
            border-radius: 5px;
            box-shadow: 0 0 10px #FF6B00;
        }

        /* Navbar Ninja Style */
        .navbar {
            background: rgba(26, 26, 26, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid var(--orange);
        }

        .navbar-brand {
            font-family: 'Ninja Naruto', Arial, sans-serif;
            color: var(--orange) !important;
            font-size: 2rem;
            text-shadow: 0 0 10px #FF6B00;
            position: relative;
        }

        .navbar-brand::after {
            content: "忍者";
            position: absolute;
            top: -10px;
            right: -20px;
            font-size: 1rem;
            color: var(--orange);
            opacity: 0.8;
        }

        .nav-link {
            color: white !important;
            font-weight: bold;
            text-transform: uppercase;
            margin: 0 10px;
            padding: 5px 15px;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: var(--orange);
            transition: 0.5s;
            box-shadow: 0 0 10px #FF6B00;
        }

        .nav-link:hover::before {
            left: 0;
        }

        .nav-link::after {
            content: "術";
            position: absolute;
            bottom: -10px;
            right: 0;
            font-size: 0.8rem;
            color: var(--orange);
            opacity: 0;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            opacity: 1;
            bottom: 0;
        }

        /* Ninja Loading Screen */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #1a1a1a;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sharingan-loader {
            width: 100px;
            height: 100px;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgcj0iNDUiIGZpbGw9IiNFODRBNUYiLz48Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiByPSIzMCIgZmlsbD0iIzFhMWExYSIvPjxwYXRoIGQ9Ik01MCAyMEw4MCA1MEw1MCA4MEwyMCA1MFoiIGZpbGw9IiNFODRBNUYiLz48L3N2Zz4=');
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Content Styling */
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border-radius: 15px;
            border: 1px solid rgba(255, 107, 0, 0.2);
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(255, 107, 0, 0.1);
        }

        /* Chakra Cards */
        .chakra-card {
            background: rgba(26, 26, 26, 0.9);
            border: 2px solid var(--orange);
            border-radius: 15px;
            padding: 20px;
            margin: 15px 0;
            position: relative;
            overflow: hidden;
            transition: 0.3s;
        }

        .chakra-card::before {
            content: "チャクラ";
            position: absolute;
            top: 5px;
            right: 10px;
            color: var(--orange);
            opacity: 0.5;
            font-size: 0.8rem;
        }

        .chakra-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(255, 107, 0, 0.3);
        }

        /* DataTables Ninja Style */
        .dataTables_wrapper {
            background: rgba(26, 26, 26, 0.9);
            padding: 20px;
            border-radius: 15px;
            border: 2px solid var(--orange);
            margin-top: 20px;
        }

        table.dataTable thead th {
            background: var(--orange);
            color: white;
            border: none;
            posi
            tion: relative;
        }

        table.dataTable thead th::after {
            content: "忍";
            position: absolute;
            top: 5px;
            right: 5px;
            font-size: 0.8rem;
            opacity: 0.5;
        }
        /* Naruto Theme Enhancements */
:root {
    --orange: #FF6B00;
    --red: #E84A5F;
    --blue: #2E86AB;
    --yellow: #FFC107;
    --leaf-green: #4CAF50;
}

/* Custom Fonts */
@font-face {
    font-family: 'Ninja Font';
    src: url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
}

/* Enhanced Background */
.ninja-bg {
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                url('https://i.imgur.com/XbFqqZ6.png');
    background-size: 200px;
    opacity: 0.1;
    animation: scrollBg 30s linear infinite;
}

/* Chakra Effects */
.chakra-aura {
    position: fixed;
    top: 50%;
    left: 50%;
    width: 100vw;
    height: 100vh;
    transform: translate(-50%, -50%);
    background: radial-gradient(circle, transparent 50%, rgba(255,107,0,0.1) 100%);
    pointer-events: none;
    z-index: -1;
    animation: pulseChakra 4s ease-in-out infinite;
}

@keyframes pulseChakra {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50% { transform: translate(-50%, -50%) scale(1.1); }
}

/* Enhanced Profile Card */
.profile-card {
    background: rgba(26,26,26,0.9);
    border: 2px solid var(--orange);
    border-radius: 15px;
    padding: 2rem;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

.profile-card::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(255,107,0,0.1), transparent);
    transform: rotate(45deg);
    animation: shimmer 3s linear infinite;
}

.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 3px solid var(--orange);
    position: relative;
    z-index: 1;
}

.profile-image::after {
    content: "";
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border-radius: 50%;
    background: linear-gradient(45deg, var(--orange), var(--red));
    z-index: -1;
    animation: rotateChakra 4s linear infinite;
}

/* Enhanced Social Icons */
.social-icons {
    margin-top: 1.5rem;
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.social-icons a {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--orange);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

.social-icons a::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, var(--orange) 30%, transparent 70%);
    opacity: 0;
    transition: all 0.3s ease;
}

.social-icons a:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(255,107,0,0.4);
}

.social-icons a:hover::before {
    opacity: 1;
    animation: pulse 1s infinite;
}

/* Card Enhancements */
.card {
    background: rgba(26,26,26,0.9);
    border: 2px solid var(--orange);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.card::before {
    content: "忍";
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 2rem;
    color: var(--orange);
    opacity: 0.1;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(255,107,0,0.3);
}

.text-orange {
    color: var(--orange);
}

/* Ninja Scroll Button */
.scroll-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: var(--orange);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    cursor: pointer;
    opacity: 0;
    transition: all 0.3s ease;
    z-index: 1000;
}

.scroll-top.visible {
    opacity: 1;
}

.scroll-top::before {
    content: "⬆";
    font-size: 1.5rem;
}

/* Loading Screen Enhancement */
.loading-screen {
    background: #1a1a1a;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.loading-screen::after {
    content: "Loading Jutsu...";
    color: var(--orange);
    margin-top: 1rem;
    font-family: 'Ninja Font', sans-serif;
    animation: pulse 1s infinite;
}

/* Additional Animations */
@keyframes shimmer {
    0% { transform: translateX(-100%) rotate(45deg); }
    100% { transform: translateX(100%) rotate(45deg); }
}

@keyframes rotateChakra {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 0.5; }
    50% { transform: scale(1.1); opacity: 1; }
}

/* Responsive Enhancements */
@media (max-width: 768px) {
    .profile-card {
        margin-bottom: 2rem;
    }
    
    .card {
        margin-bottom: 1rem;
    }
    
    .social-icons a {
        width: 35px;
        height: 35px;
    }
}

        /* Animations */
        .fade-in {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5rem;
            }
            
            .nav-link::after {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-dark text-light">
    <!-- Loading Screen -->
    <div class="loading-screen">
        <div class="sharingan-loader"></div>
    </div>

    <!-- Animated Background -->
    <div class="ninja-bg"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?page=home">
                <i class="fas fa-fire-alt"></i> Shinobi Tech
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=home">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=about">
                            <i class="fas fa-user-ninja"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=contact">
                            <i class="fas fa-scroll"></i> Contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=datatables">
                            <i class="fas fa-table"></i> Ninja Data
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container" id="pageContent">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'contact':
                    include "contact.php";
                    break;
                case 'datatables':
                    include "datatables.php";
                    break;
                default:
                    include "home.php";
            }
        } else {
            include "home.php";
        }
        ?>
    </div>

    <!-- Scripts -->
    <script src="assets/jquery-3.7.1.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/datatables/dataTables.js"></script>

    <script>
        // Loading Screen Animation
        window.addEventListener('load', function() {
            const loadingScreen = document.querySelector('.loading-screen');
            loadingScreen.style.opacity = '0';
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 500);
        });

        // Initialize DataTables with Ninja Theme
        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelector("#example")) {
                new DataTable("#example", {
                    responsive: true,
                    pageLength: 7,
                    dom: '<"chakra-controls"Bfr>t<"chakra-info"ip>',
                    language: {
                        search: "🔍 忍術検索:",
                        paginate: {
                            next: '次 ▶',
                            previous: '◀ 前'
                        }
                    }
                });
            }
        });

        // Chakra Flow Animation on Scroll
        window.addEventListener('scroll', function() {
            const cards = document.querySelectorAll('.chakra-card');
            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                if (cardTop < window.innerHeight - 100) {
                    card.style.transform = 'translateY(0)';
                    card.style.opacity = '1';
                }
            });
        });
    </script>
</body>
</html>