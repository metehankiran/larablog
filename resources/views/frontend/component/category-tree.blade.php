@foreach($parentCategories as $category)
  @if(count($category->subcategory))
    @include('frontend.component.sub-category',['subcategories' => $category->subcategory])
  @else
    <li> <a href="{{ route('category',$category->slug) }}">{{$category->title}}</a> </li>
  @endif
@endforeach
