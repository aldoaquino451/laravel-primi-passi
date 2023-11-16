<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primo Progetto</title>
</head>

<body style="margin:0; min-height: 100vh">

    <header style="padding:20px; background-color:lightblue">
        <ul style="display:flex; gap:20px;">
            @foreach ($menu as $item)
                <li style="list-style: none">
                    <a style="color:lightslategrey" href="{{ $item['link'] }}">
                        {{ $item['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </header>

    <h1 style="margin:50px">{{ $menu[1]['title'] }}</h1>

    <p style="margin:50px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus modi eveniet
        voluptatibus tempore corrupti dignissimos sunt ea ratione debitis excepturi. Itaque deleniti eos placeat, iure
        adipisci quaerat beatae assumenda explicabo!</p>

</body>

</html>
