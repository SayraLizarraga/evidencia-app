@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6 text-start">

            <form action="{{ route('warehouse.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="product_id" class="form-label form-control-lg"><b>Product</b></label>
                    <select class="form-control form-control-lg" name="product_id">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} ${{ number_format($product->price, 2) }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="quantity" class="form-label form-control-lg"><b>Quantity</b></label>
                    <input type="number" name="quantity" class="form-control" step="1" value="1" min="1">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label form-control-lg"><b>Product</b></label>
                    <select class="form-control form-control-lg" name="status">
                        <!--Ideas
                            0 - Out of stock
                            1 - Available --->
                        <option value="0">Out Of Stock</option>
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-info btn-lg">Create new request</button><br><br>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection