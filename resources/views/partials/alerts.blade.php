@if(session('success'))
    <div class="alert alert-success col-md-6" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning col-md-6" role="alert">
        {{ session('warning') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger col-md-6" role="alert">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger col-md-6" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
