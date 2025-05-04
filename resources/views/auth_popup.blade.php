<!-- filepath: c:\VSC\SuniuTranfert\resources\views\auth_popup.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .popup-container {
            background-color: #f9fdfb;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 350px;
            text-align: center;
        }
        .popup-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        .popup-container p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }
        .popup-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .popup-container button {
            width: 100%;
            padding: 10px;
            background-color: #6fcf97;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .popup-container button:hover {
            background-color: #57b87b;
        }
        .popup-container a {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #6fcf97;
            text-decoration: none;
        }
        .popup-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="popup-container">
        <h1>Create An Account</h1>
        <p>Create an account to enjoy all the services without any ads for free!</p>
        <input type="text" placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Create Account</button>
        <a href="#">Already Have An Account? Sign In</a>
    </div>
</body>
</html>