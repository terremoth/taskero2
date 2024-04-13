<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="col-md-8 col-xs-12">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <h4>Errors:</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif

        @session('status')
        <div class="col-md-12 col-xs-12">
            <div class="alert alert-{{ session('status') ?? 'info'}} alert-dismissible" role="alert">
                <span>{!! session('message') !!}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endsession

    </div>
</div>
