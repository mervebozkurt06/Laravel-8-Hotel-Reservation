@foreach($children as $subcategory)
    <ul class="list-links">
        @if(count($subcategory->children))
            <li> {{$subcategory->title}} </li>
            <div class="list-links">
                @include('home.categorytree',['children'=>$subcategory->children])
            </div>
            <hr>
        @else
            <li><a href="{{route('categoryhotels',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
