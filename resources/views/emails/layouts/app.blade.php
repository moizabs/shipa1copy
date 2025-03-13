<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
        }

        .header {
            text-align: center;
            background-color: white;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }

        .footer {
            text-align: center;
            background-color: #062e39;
            color: white;
            padding: 10px;
            border-radius: 0 0 10px 10px;
        }

        .terms-conditions {
            display: flex;
            margin-top: 10px;
            justify-content: space-evenly;
        }

        .terms-conditions a {
            color: white;
            text-decoration: none;
        }

        .logo-area {
            width: 276px;
            padding: 15px 20px;
            display: flex;
            align-items: center;
        }

        .logo-area img {
            max-width: 200px;
        }

        .content {
            padding: 20px 0px;
        }

        .content h2 {
            font-size: x-large;
            border-bottom: 5px solid #8fc445;
            background: #062e39;
            color: white;
            text-transform: uppercase;
            padding: 5px;
        }

        .content p {
            margin: 10px 0;
        }

        .content ul li {
            margin: 5px 0;
        }

        .custom-list {
            padding-top: 10px;
            padding-bottom: 10px;
            background: #062e39;
            text-decoration: dotted;
            color: white;
        }

        .content a {
            color: #0056b3;
            text-decoration: none;
        }

        .content a:hover {
            text-decoration: underline;
        }

        .rating-section {
            margin-top: 20px;
        }

        .rating-section .col-6 {
            margin-bottom: 20px;
        }

        .rating-section img {
            max-width: 100%;
            height: auto;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 25px;
        }

        .social-links a {
            display: inline-block;
            font-size: 24px;
            color: white;
        }

        .social-links a:hover {
            color: #8fc445;
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <div class="container">
        @include('emails.includes.header')
        @yield('content')
        @include('emails.includes.footer')
    </div>
</body>

</html>
