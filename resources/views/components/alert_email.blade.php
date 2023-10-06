@if(session()->has('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Your message!</strong> {{session('msg')}}

    </div>

@endif
