@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <a href="{{ route('purchaising.index') }}" class="btn btn-lg btn-primary">View Requests</a>
        </div>
    </div>
</div>
@endsection