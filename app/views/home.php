<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Caisse</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* HEADER */
        header {
            background: #1976d2;
            color: white;
            padding: 10px;
            text-align: center;
        }

        header a {
            color: #bbdefb;
            text-decoration: none;
            margin-left: 10px;
        }

        /* LAYOUT */
        .container {
            display: flex;
            min-height: 80vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            background: #f1f1f1;
            padding: 20px;
            border-right: 1px solid #ccc;
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .sidebar a {
            display: block;
            margin: 10px 0;
            color: #1976d2;
            text-decoration: none;
        }

        /* CONTENT */
        .content {
            flex: 1;
            padding: 20px;
        }

        /* FOOTER */
        footer {
            background: #1976d2;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

<header>
    TD - SI-IHM - ETU000XXX |
    <a href="#">Changer Caisse</a>
</header>

<div class="container">
    <div class="sidebar">
        <h2>Caisse n°X</h2>
        <a href="#">Menu 1</a>
        <a href="#">Menu 2</a>
        <a href="#">Menu 3</a>
    </div>

    <div class="content">
        <h2>Contenu</h2>
        <p>Ici le contenu de la caisse...</p>
    </div>
</div>

<footer>
    Copyright © Your Website 2025
</footer>

</body>
</html>