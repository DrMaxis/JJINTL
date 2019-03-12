<ul>
    @foreach($items as $menu_item)
    <li><a id="fadeLink" href="{{$menu_item->link()}}">{{$menu_item->title}}</a></li>
    @endforeach

</ul>