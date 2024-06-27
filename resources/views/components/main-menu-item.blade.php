<nav class="main-nav">

    <ul class="main-menu">
        @if (count($list_menu) == 0)

            <li class="main-menu-item"><a href="{{ url($menu->link) }}" class="main-menu-link">{{ $menu->name }}</a></li>
        @else
            <li class="main-menu-item has-dropdown">
                <a href="{{ url($menu->link) }}" class="main-menu-link">{{ $menu->name }}</a>
                <ul class="dropdown-menu">
                    @foreach ($list_menu as $item)
                        <li class="dropdown-item">
                            <a class="menu-link-a   text-decoration-none" href="{{ url($item->link) }}">
                                {{ $item->name }}
                             </a>
                        </li>
                    @endforeach

                </ul>
            </li>
        @endif

    </ul>
</nav>
