<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suniu Transfert</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- CSS selon Vite ou non -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/Cuj.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/Cuj.css') }}">
    @endif

</head>
<body>
    <header>
        <div class="logo">Suniu Transfert</div>
        <nav>
            <ul>
                <li><a href="#">Send money</a></li>
                <li><a href="#">Pick-up cash</a></li>
                <li><a href="#">Track transfer</a></li>
                <li><a href="#">Pay bills</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </nav>
        <div class="language-login">
            <a href="#" class="a1">Login</a>
            <a href="#" class="a2">Register</a>
        </div>
    </header>
    
    
    <section class="hero">
        <h1>The fast and trusted way to send money online</h1>
        <p>Whether you need to send money to friends down the street or family across the globe, Eastern Union gets your funds there quickly and reliably.</p>
    </section>
    
    <section class="features">
        <div class="feature">
            <ion-icon name="fastforward" class="fast"></ion-icon>
            <h3>Fast</h3>
            <p>Send money online to loved ones across the world.</p>
        </div>
        <div class="feature">
            <ion-icon name="checkmark-circle-outline" class="safe"></ion-icon>
            <h3>Safe</h3>
            <p>Feel secure knowing we have sent over a billion.</p>
        </div>
        <div class="feature">
            <ion-icon name="thumbs-up" class="thumb"></ion-icon>
            <h3>Great Value</h3>
            <p>Great rates, special offers, and no hidden fees.</p>
        </div>
    </section>
    
    <form class="form-container" action="/" method="post">
        <h2>Send money online</h2>

        <div class="form-group">
            <div class="option-title">Receiver's country</div>
            <select>
                <option>Select country</option>
                <option value="Senegal">Senegal</option>
                <option value="Canada">Canada</option>
                <option value="Italie">Italie</option>
                <option value="Espagne">Espagne</option>
                <option value="Angleterre">Angleterre</option>
                <option value="Allemagne">Allemagne</option>
                <option value="Croatie">Croatie</option>
            </select>
        </div>
        
        <div class="form-group">
            <div class="option-title">
                <p>Send amount</p>
                <p>Receive amount</p>
            </div>
            <div class="amount-display">
                <input type="text" class="amount-box" value="0.00">
                <ion-icon name="repeat" class="arrow"></ion-icon>
                <input type="text" class="amount-box" value="0.00">
            </div>
        </div>
        
        <div class="option-group">
            <div class="option-title">How does your receiver want the money?</div>
            
            <div class="options">
                <div class="option">
                    <img src="{{ Vite::asset('resources/images/wave.jpg') }}" alt="Wave" height="40px">
                    <p>Wave</p>
                </div>
                <div class="option">
                    <img src="{{ Vite::asset('resources/images/OM.jpg') }}" alt="Orange Money" height="40px">
                    <p>Orange Money</p>
                </div>
                <div class="option">
                    <img src="{{ Vite::asset('resources/images/FreeMoney.jpg') }}" alt="Free Money" height="40px">
                    <p>Free Money</p>
                </div>
            </div>
            
        </div>
        
        
        <div class="option-title">How would you like to pay?</div>
            <input type="radio" id="r1" name="choice"> 
            <label for="r1">Pay online</label>
            <input type="radio" id="r2" name="choice"> 
            <label for="r2">Pay cash in-store</label>
        
        <div class="option-group">
            <div class="option-title"></div>

            <div class="options">
                <div class="option">
                    <img src="{{ Vite::asset('resources/images/wave.jpg') }}" alt="Wave" height="40px">
                    <p>Wave</p>
                </div>
                <div class="option">
                    <img src="{{ Vite::asset('resources/images/OM.jpg') }}" alt="Orange Money" height="40px">
                    <p>Orange Money</p>
                </div>
                <div class="option">
                    <img src="{{ Vite::asset('resources/images/FreeMoney.jpg') }}" alt="Free Money" height="40px">
                    <p>Free Money</p>
                </div>
            </div>
            
        </div>
        
        <button class="continue-btn">Continue ></button>
    </form>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
