@if (Session::has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (Session::has('failed'))
    <div class="alert alert-error">{{ session('failed') }}</div>
@endif
