

   <nav class="main-nav">
    <ul class="main-menu">
        @if (count($list_menu) == 0)

      <li class="main-menu-item"><a href="{{ url($menu->link) }}" class="main-menu-link">{{ $menu->name }}</a></li>
      @else

      <li class="main-menu-item has-dropdown">
        <a  href="{{ url($menu->link) }}" class="main-menu-link">{{ $menu->name  }}</a>
        <ul class="dropdown-menu">
            @foreach ($list_menu as $item)

          <li class="dropdown-item"><a class="text-dark   text-decoration-none" href="{{ url($item->link) }}" class="dropdown-link">{{ $item->name  }} 1</a></li>
          @endforeach

        </ul>
      </li>
      @endif

    </ul>
  </nav>

