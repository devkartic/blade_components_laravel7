<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <div {{ $attributes }}>
        <div class="card-header">I am {{ $title }}</div>
        <div class="card-body">
            <h4>{{ $subtitle }}</h4>
            <ul class="list-group">
                <li class="list-group-item">First item</li>
                <li class="list-group-item">Second item</li>
                <li class="list-group-item">Third item</li>
                <li class="list-group-item">{{ $info }}</li>
                @foreach($lists('list number 4') as $list)
                    <li class="list-group-item">{{ $list }}</li>
                @endforeach
                {{ $slot }} // default slot
            </ul>
        </div>
        <div class="card-footer">I am Footer</div>
    </div>
</div>
