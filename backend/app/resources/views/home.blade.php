@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header"><h2><strong>Welcome</strong> {{ Auth::user()->name }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<iframe width="1200" height="900" src="https://datastudio.google.com/embed/reporting/1KrJbe_ZpkmzJQY5BRmVyRsC_dwfZ6fvd/page/8H3Q" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
