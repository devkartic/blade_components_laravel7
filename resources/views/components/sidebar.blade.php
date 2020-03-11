<div>
    <x-navigation />
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <x-partials.breadcrumb /> {{--    This is anonymous component. It's has no class. --}}
    <div {{ $attributes }}>
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <h5 class="card-title">{{ $subtitle }}</h5>
            <ul class="list-group">
                <li class="list-group-item">Item 1 from view static</li>
                <li class="list-group-item">Item 2 from view static</li>
                <li class="list-group-item">{{ $info }}</li>
                @foreach($lists('Item  5 marge from view component') as $list)
                    <li class="list-group-item">{{ $list }}</li>
                @endforeach
                {{ $slot }}
            </ul>
        </div>
        <div class="card-footer">I am Footer</div>
    </div>
</div>
