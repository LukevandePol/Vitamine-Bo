@if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between align-items-center"
         role="alert">
        {{ $message }}
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close">
            <i class="fas fa-xmark"></i>
        </button>
    </div>
@endif

@if($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between align-items-center"
         role="alert">
        {{ $message }}
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close">
            <i class="fas fa-xmark"></i>
        </button>
    </div>
@endif

@if($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible fade show d-flex justify-content-between align-items-center"
         role="alert">
        {{ $message }}
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close">
            <i class="fas fa-xmark"></i>
        </button>
    </div>
@endif

@if($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible fade show d-flex justify-content-between align-items-center"
         role="alert">
        {{ $message }}
        <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close">
            <i class="fas fa-xmark"></i>
        </button>
    </div>
@endif
