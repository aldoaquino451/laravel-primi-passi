{{-- componente header --}}

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
