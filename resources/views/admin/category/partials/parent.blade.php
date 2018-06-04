@foreach($categories as $category_parent)

    <option value="{{$category_parent->id or ""}}"

        @isset($category->id)

            @if($category->parent_id == $category_parent->id)
                selected=""
            @endif

            @if ($category->id == $category_parent->id)
                hidden=""
            @endif

        @endisset

    >
        {!! $delimeter or "" !!}{{$category_parent->title}}
    </option>

    @if(count($category_parent->getParentCategory) > 0)

        @include('admin.category.partials.parent', [
            'categories' => $category_parent->getParentCategory,
            'delimeter'  => ' - '.$delimeter
        ])
    @endif

    @endforeach