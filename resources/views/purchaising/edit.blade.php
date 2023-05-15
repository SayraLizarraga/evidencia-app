@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6 text-start">

            <form action="{{ route('purchaising.update', $requests->id) }}" method="post">
                @method('put')
                @csrf

                <div class="mb-2">
                    <label for="id" class="form-label form-control-lg"><b><i>Requests ID</i></b></label>
                    <label for="id" class="form-label form-control-lg">{{$requests->id}}</label>
                </div>
                <div class="mb-2">
                    <label for="id" class="form-label form-control-lg"><b><i>Product ID</i></b></label>
                    <label for="id" class="form-label form-control-lg">{{$requests->product_id}}</label>
                </div>
                <div class="mb-2">
                    <label for="id" class="form-label form-control-lg"><b><i>Quantity</i></b></label>
                    <label for="id" class="form-label form-control-lg">{{$requests->quantity}}</label>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label form-control-lg"><b><i>Status</i></b></label>
                    <select name="status" class="form-control form-control-lg">
                        <option value="0">Out Of Stock</option>
                        <option value="1">Available</option>
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-warning btn-lg btn-block">Edit Request</button><br><br>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection 
