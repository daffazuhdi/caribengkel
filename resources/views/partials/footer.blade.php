<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="{{ url('style.css') }}" rel="stylesheet">

    <style>
      footer {
        font-family: "DM Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        color: white;
        /* padding: 2% 10%; */
        /* background: none; */
      }
    </style>
</head>
<footer class="mt-auto py-4 px-5" style="background-color: #0D5C63;">
    <div class="top-footer d-flex justify-content-between align-middle">
        <div class="top-footer-text" style="text-align: center;">
            <p class="m-0 py-1" style="font-size: 140%; font-weight: 500;">CariBengkel</p>
        </div>
        <div class="collapse navbar-collapse d-flex justify-content-center p-0 m-0" id="navbarSupportedContent">
            <ul class="nav justify-content-center" id="navbarText">
                <li class="nav-item" id="menu">
                    <a class="nav-link text-white" aria-current="page" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item" id="menu">
                    <a class="nav-link text-white" href="{{ url('/bengkel') }}">Bengkel</a>
                </li>
                <li class="nav-item" id="menu">
                    <a class="nav-link text-white" href="#">Tentang Kami</a>
                </li>
            </ul>
        </div>
        <div class="img-container d-flex justify-content-between">
            <a class="m-auto px-1" href="http://facebook.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 1024 1024">
                    <path fill="white" d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32m-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6c44.2 0 82.1 3.3 93.2 4.8v107.9z"/>
                </svg>
            </a>
            <a class="m-auto px-1" href="http://instagram.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                    <path fill="white" d="M13.028 2c1.125.003 1.696.009 2.189.023l.194.007c.224.008.445.018.712.03c1.064.05 1.79.218 2.427.465c.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.012.266.022.487.03.712l.006.194c.015.492.021 1.063.023 2.188l.001.746v1.31a78.831 78.831 0 0 1-.023 2.188l-.006.194c-.008.225-.018.446-.03.712c-.05 1.065-.22 1.79-.466 2.428a4.883 4.883 0 0 1-1.153 1.772a4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465a72.11 72.11 0 0 1-.712.03l-.194.006c-.493.014-1.064.021-2.189.023l-.746.001h-1.309a78.43 78.43 0 0 1-2.189-.023l-.194-.006a63.036 63.036 0 0 1-.712-.031c-1.064-.05-1.79-.218-2.428-.465a4.889 4.889 0 0 1-1.771-1.153a4.904 4.904 0 0 1-1.154-1.772c-.247-.637-.415-1.363-.465-2.428a74.1 74.1 0 0 1-.03-.712l-.005-.194A79.047 79.047 0 0 1 2 13.028v-2.056a78.82 78.82 0 0 1 .022-2.188l.007-.194c.008-.225.018-.446.03-.712c.05-1.065.218-1.79.465-2.428A4.88 4.88 0 0 1 3.68 3.678a4.897 4.897 0 0 1 1.77-1.153c.638-.247 1.363-.415 2.428-.465c.266-.012.488-.022.712-.03l.194-.006a79 79 0 0 1 2.188-.023zM12 7a5 5 0 1 0 0 10a5 5 0 0 0 0-10m0 2a3 3 0 1 1 .001 6a3 3 0 0 1 0-6m5.25-3.5a1.25 1.25 0 0 0 0 2.5a1.25 1.25 0 0 0 0-2.5"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="py-3"></div>

    <div class="footer-text d-flex justify-content-between" style="font-size: 90%; width: 30%;">
        <p class="m-0">&copy; 2024 CariBengkel</p>
        <a class="nav-link" style="font-weight: 500" href="#">Syarat dan Ketentuan</a>
        <a class="nav-link" style="font-weight: 500" href="#">Privasi</a>
    </div>
</footer>
