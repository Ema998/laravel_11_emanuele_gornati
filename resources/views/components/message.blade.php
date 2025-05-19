 @if (session('success'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif