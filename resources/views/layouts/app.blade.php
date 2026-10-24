<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'POS System' }} | Laravel POS</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; background: #f4f6f8; color: #1f2937; font-family: Arial, sans-serif; }
        nav { background: #1f2937; padding: 18px; text-align: center; }
        nav a { margin: 0 15px; color: white; font-weight: bold; text-decoration: none; }
        nav a:hover { color: #93c5fd; }
        main { max-width: 980px; margin: 0 auto; padding: 48px 20px; }
        h1 { margin: 0 0 16px; color: #1d4ed8; }
        p { font-size: 18px; line-height: 1.6; }
        .card { background: white; padding: 28px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,.08); }
        table { width: 100%; margin-top: 28px; background: white; border-collapse: collapse; box-shadow: 0 4px 12px rgba(0,0,0,.08); }
        th, td { padding: 14px; border: 1px solid #d1d5db; text-align: left; }
        th { background: #2563eb; color: white; }
        tbody tr:nth-child(even) { background: #eff6ff; }
        .eyebrow { color: #64748b; font-size: 14px; font-weight: bold; letter-spacing: .08em; text-transform: uppercase; }
        .badge { display: inline-block; padding: 5px 10px; border-radius: 999px; background: #dbeafe; color: #1e40af; font-size: 13px; }
    </style>
</head>
<body>
    <nav aria-label="Main navigation">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers') }}">Customers</a>
        <a href="{{ route('users') }}">Users</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
