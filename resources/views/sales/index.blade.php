@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <a href="{{ route('sales.create') }}" class="btn btn-lg btn-primary"> Create Superpower</a>
        </div>
    </div>
</div>
@endsection