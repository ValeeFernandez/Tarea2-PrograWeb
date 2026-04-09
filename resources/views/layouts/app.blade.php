<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f1eb;
            margin: 0;
            padding: 0;
            color: #2c2c2c;
        }

        /* NAVBAR */
        nav {
            background-color: #414757;
            padding: 25px 0;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 18px;
            border-radius: 8px;
            background-color: #414757;
            font-size: 16px;
            letter-spacing: 0.5px;
            transition: 0.3s;
        }

        nav a:hover {
            background-color: #3f537f;
        }

        /* CONTENIDO */
        .container {
            padding: 40px;
            text-align: center;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 18px;
        }

        /* BOTONES */
        .buttons {
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            margin: 10px;
            padding: 12px 25px;
            background-color: #414757;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #3f537f;
        }

        /* FOOTER */
        footer {
            margin-top: 40px;
            background-color: #8494AD;
            color: gray;
            padding: 15px;
            text-align: center;
        }
                /* GRID DE CARDS */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        /* CARD */
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* TITULO CARD */
        .card h3 {
            margin-bottom: 10px;
        }

        /* LINK */
        .card a {
            text-decoration: none;
            color: #1f2a44;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav>
        <a href="/">Home</a>
        <a href="/books">Books</a>
        <a href="/authors">Authors</a>
        <a href="/publishers">Publishers</a>
    </nav>

    <!-- CONTENIDO DINÁMICO -->
    <div class="container">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer>
        COPYRIGHT (C) 2026 - Valeria Fernández. All rights reserved.
    </footer>

</body>
</html>