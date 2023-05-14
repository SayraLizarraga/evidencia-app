@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <a href="{{ route('warehouse.index') }}" class="btn btn-lg btn-primary">View Orders</a>
        </div>
    </div>
</div>
@endsection