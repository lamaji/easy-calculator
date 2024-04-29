@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Welcome to the Calculator App</h5>
                <p class="card-text">Click the button below to access the calculator.</p>
                <a href="/calculator" class="btn btn-primary">Go to Calculator</a>
            </div>
        </div>
    </div>
</div>
@endsection