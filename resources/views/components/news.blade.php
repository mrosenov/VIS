@if ($news->count() <= 0)
    <div class="card border-danger mb-3">
        <div class="card-header">Съобщение</div>
        <div class="card-body">
            <p>
            <div class="alert alert-dismissible alert-danger">Няма публикувани съобщения</div>
            </p>
        </div>
    </div>
    @else
    @foreach($news as $row)
        <div class="card border-danger mb-3">
            <div class="card-header">{{ $row->title }}</div>
            <div class="card-body">
                <p>
                    {{ $row->text }}
                </p>
            </div>
        </div>
    @endforeach
@endif
