@foreach($children as $subcategory)
    <ul class="dropdown-menu">
        @if(count($subcategory->children))
        <li>{{$subcategory->title}}</li>
        <li>
            <a href="{{ asset('assets')}}/#">
                @include('home.categorytree', ['children' => $subcategory->children])
            </a>
        </li>
        @else
            <li><a href="">{{$subcategory->title}}</a></li>
        @endif
        <!-- <li><a href="{{ asset('assets')}}/#">Second Level Menu</a></li>
        <li><a href="{{ asset('assets')}}/#">Second Level Menu</a></li>
        <li><a href="{{ asset('assets')}}/#">Second Level Menu</a></li> -->
    </ul>
@endforeach

