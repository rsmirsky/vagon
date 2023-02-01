
@if (isset($breadcrumbs) && count($breadcrumbs))
    <ul class="breadcrumbs">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li><a>{{ $breadcrumb->title }}</a></li>
            @endif
        @endforeach
    </ul>

@endif
