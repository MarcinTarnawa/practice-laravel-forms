<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

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
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Lista Wydatków</h2>
            <a href="/form" class="btn btn-primary">Dodaj Nowy</a>
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <div class="table-responsive shadow-sm rounded">
            <table class="table table-hover custom-table">
                <thead class="table-dark">
                    <tr>
                        <th>Data</th>
                        <th>Opis</th>
                        <th>Kategoria</th>
                        <th class="text-end">Kwota</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->date }}</td>
                        <td>{{ $expense->description }}</td>
                        <td>
                            <span class="badge bg-info text-dark">
                                {{ $expense->category->name }}
                            </span>
                        </td>
                        <td class="text-end fw-bold">
                            {{ number_format($expense->amount, 2) }} zł
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>