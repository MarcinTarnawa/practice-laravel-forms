<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net" rel="stylesheet">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 900px;
            margin-top: 50px;
        }

        .custom-table {
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }

        .table thead {
            background-color: #2d3436;
        }

        .badge {
            font-weight: 500;
            padding: 0.5em 0.8em;
        }

        .text-end {
            text-align: right;
        }

        tr:hover {
            background-color: #f1f2f6 !important;
            transition: 0.3s;
        }
    </style>

    @endif
</head>

<body>
    Przejdz do strony <a href="/expenses">Wydatków</a>
    <br>
    Przejdz do testowej formy <a href="/form">Test form</a>
</body>

</html>