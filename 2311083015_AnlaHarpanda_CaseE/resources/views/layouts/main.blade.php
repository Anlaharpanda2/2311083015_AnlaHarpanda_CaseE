<!doctype html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>@yield('title', 'Website PNP')</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
            background-color: #222;
            color: #fff;
        }

        thead {
            background-color: #333;
            color: #fff;
            text-align: left;
            font-weight: bold;
        }

        thead th {
            padding: 15px;
        }

        tbody tr {
            border-bottom: 1px solid #444;
        }

        tbody tr:nth-child(even) {
            background-color: #2a2a2a;
        }

        tbody tr:hover {
            background-color: #444;
            transition: 0.3s;
        }

        td {
            padding: 12px;
            color: #ddd;
        }

        @media (max-width: 600px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }
    </style>
    <link rel="stylesheet" href='/css/bootstrap.min.css'>
</head>

<body class="d-flex flex-column h-100">
    @include('layouts/header')
    <main class="flex-shrink-0">
        <div class="container">
            @yield('content')
        </div>
    </main>
    @include('layouts/footer')
    <script src="/js/boostrap.bundle.min.js"></script>
</body>
</html>
