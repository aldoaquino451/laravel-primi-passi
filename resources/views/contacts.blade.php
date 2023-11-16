<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primo Progetto</title>
</head>

<body>

    <header>
        <ul style="display:flex; gap:20px;">
            <li style="list-style: none">
                <a href="/"> home</a>
            </li>
            <li style="list-style: none">
                <a href="/{{ $menu[1] }}"> login</a>
            </li>
            <li style="list-style: none">
                <a href="/{{ $menu[2] }}">contacts </a>
            </li>
        </ul>
    </header>
    <h1>Contatti</h1>

</body>

</html>
