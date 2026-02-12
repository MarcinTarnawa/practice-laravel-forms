<form action="{{ $action }}" method="post" class="row g-3">
    @csrf
        <div class="col-md-4">
            <input type="{{ $type }}" name="{{ $name }}" class="form-control" placeholder=" {{ $placeholder }}" {{ $required }}>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-success w-100">
                Zapisz
            </button>
        </div>
        <div> <a href="/">Powrót</a></div>
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    @endif
</form>