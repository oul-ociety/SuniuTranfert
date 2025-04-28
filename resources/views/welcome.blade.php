<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suniu Transfert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }
        
        header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            background-color: #242323;
    color: white;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        nav ul li {
            margin-right: 20px;
        }
        
        .language-login {
            display: flex;
            justify-content: flex-end;
            margin-top: -30px;
        }
        
        .hero {
            text-align: center;
            padding: 40px 20px;
            background-color: #f9f9f9;
        }
        
        .features {
            display: flex;
            justify-content: space-around;
            padding: 30px 0;
            text-align: center;
            background-color: #f9f9f9;
        }
        
        .feature {
            width: 30%;
        }
        
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        select, input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .amount-display {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        
        .amount-box {
            width: 48%;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
            background-color: #f5f5f5;
        }
        
        .option-group {
            margin-bottom: 20px;
        }
        
        .option-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .options {
            display: flex;
            flex-wrap: wrap;
        }
        
        .option {
            margin-right: 15px;
            margin-bottom: 10px;
        }
        
        .continue-btn {
            background-color: #0066cc;
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
        
        hr {
            border: none;
            border-top: 1px solid #eee;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Suniu Tranfert</div>
        <nav>
            <ul>
                <li>Send money</li>
                <li>Pick-up cash</li>
                <li>Track transfer</li>
                <li>Pay bills</li>
                <li>Register</li>
                <li>Support</li>
            </ul>
        </nav>
        <div class="language-login">
            <span>Login</span>
            <span>Register</span>
        </div>
    </header>
    
    <hr>
    
    <section class="hero">
        <h1>The fast and trusted way to send money online</h1>
        <p>Whether you need to send money to friends down the street or family across the globe, Eastern Union gets your funds there quickly and reliably.</p>
    </section>
    
    <section class="features">
        <div class="feature">
            <h3>Fast</h3>
            <p>Send money online to loved ones across the world.</p>
        </div>
        <div class="feature">
            <h3>Safe</h3>
            <p>Feel secure knowing we have sent over a billion.</p>
        </div>
        <div class="feature">
            <h3>Great Value</h3>
            <p>Great rates, special offers, and no hidden fees.</p>
        </div>
    </section>
    
    <section class="form-container">
        <h2>Send money online</h2>
        
        <div class="form-group">
            <div class="option-title">Receiver's country</div>
            <select>
                <option>Select country</option>
            </select>
        </div>
        
        <div class="form-group">
            <div class="option-title">Send amount</div>
            <div class="option-title">Receive amount</div>
            <div class="amount-display">
                <div class="amount-box">0.00</div>
                <div class="amount-box">0.00</div>
            </div>
        </div>
        
        <div class="option-group">
            <div class="option-title">How does your receiver want the money?</div>
            <div class="options">
                <div class="option">Cash pick-up</div>
                <div class="option">Bank account</div>
                <div class="option">Pay off</div>
            </div>
        </div>
        
        <div class="option-group">
            <div class="option-title">How would you like to pay?</div>
            <div class="options">
                <div class="option">Pay online</div>
                <div class="option">Pay cash in-store</div>
            </div>
        </div>
        
        <div class="option-group">
            <div class="option-title"></div>
            <div class="options">
                <div class="option">Credit card</div>
                <div class="option">Debit card</div>
                <div class="option">Bank account</div>
            </div>
        </div>
        
        <button class="continue-btn">Continue ></button>
    </section>
</body>
</html>