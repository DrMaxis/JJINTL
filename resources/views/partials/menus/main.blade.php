<ul class="primary-menu-list text-center">
    @foreach($items as $menu_item)
        <li><a  href="{{$menu_item->link()}}">{{$menu_item->title}}</a></li>
        @endforeach
        @yield('search')
    </ul>