<li class="menu-item-has-children">
    <a href="{{ route('category',$category->slug) }}">{{ $category->title }}</a>
    <ul class="sub-menu text-muted font-small">
        @foreach($subcategories as $subcategory)
        <li><a href="{{ route('category',$subcategory->slug) }}">{{ $subcategory->title }}</a></li>
        @endforeach
    </ul>
</li>
