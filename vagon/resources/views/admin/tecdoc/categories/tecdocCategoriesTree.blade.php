<li>{{ $category->description }}</li>
@if($category->children)
    <ul>
        @foreach($category->children as $category)
            @include('admin.tecdoc.categories.tecdocCategoriesTree', ['category' => $category])
        @endforeach
    </ul>
@endif
