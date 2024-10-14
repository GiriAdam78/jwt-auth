<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Depan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        :root{
            --font-display:'Inter Thight', sans-serif;
        }
        .container{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        *{
            box-sizing: border-box;
        }
        body{
            font-family: var(--font-display);
        }
        h1,h2,h3,h4,h5,h6{
            margin-inline-start: 0px !important;
            margin-inline-end:  0px !important;
            margin-block-start: 0px !important;
            margin-block-end: 0px !important;
            font-weight: 400;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="">Framework JWT API</h1>
    </div>
</body>
</html>