<!DOCTYPE html>
<html>
<head>
    <title>Account Settings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f2f2f2;
            background-image: url({{url('images/background-white.jpg')}});
            overflow: hidden;
            background-size: cover;
        }

        .container {
            width: 400px;
            padding: 20px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            background-color: rgba(225, 225, 225, 0.8);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            margin-top: 20px;
            color: #666;
            text-align: center;
        }

        .info-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .info-label {
            width: 150px;
            text-align: right;
            margin-right: 10px;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container button {
            margin-right: 10px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        .back-button {
            width: 30px;
            position: absolute;
            top: 20px;
            left: 20px;
        }

    </style>
</head>
<body>
    <a href="/Main"><img src="{{URL::asset('/images/backbutton.png')}}" alt="" class="back-button"></img></a>
    <div class="container">
        <h1>Account Information</h1>

        <div class="info-container">
            <label for="email" class="info-label">Email:</label>
            <input type="email" id="email" name="email" value="">
        </div>

        <div class="info-container">
            <label for="password" class="info-label">Password:</label>
            <input type="password" id="password" name="password" value="">
        </div>

        <div class="info-container">
            <label for="google-account" class="info-label">Account:</label>
            <input type="text" id="google-account" name="google-account" value="">
        </div>

        <div class="button-container">
            <a href="/Register"><button type="submit">Log Out</button></a>
            <a href="/Login"><button type="submit">Change Account</button></a>
        </div>
    </div>
</body>
</html>