@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6 text-start">

            <form action="{{ route('warehouse.update', $order->id) }}" method="post">
                @method('put')
                @csrf

                <div class="mb-2">
                    <label for="id" class="form-label form-control-lg"><b><i>Order ID</i></b></label>
                    <label for="id" class="form-label form-control-lg">{{$order->id}}</label>
                </div>

                <div class="mb-2">
                    <label for="total" class="form-label form-control-lg"><b><i>Total</i></b></label>
                    <label for="total" class="form-label form-control-lg">${{number_format($order->total, 2)}}</label>
                </div>

                <div class="mb-2">
                    <label for="subtotal" class="form-label form-control-lg"><b><i>Subtotal</i></b></label>
                    <label for="subtotal" class="form-label form-control-lg">${{number_format($order->subtotal, 2)}}</label>
                </div>

                <div class="mb-2">
                    <label for="tax" class="form-label form-control-lg"><b><i>Tax Fee</i></b></label>
                    <label for="tax" class="form-label form-control-lg">{{number_format($order->tax, 2)}}</label>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label form-control-lg"><b><i>Status</i></b></label>
                    <select name="status" class="form-control form-control-lg">
                        <option value="0">Processing</option>
                        <option value="1">Ready to be delivered</option>
                        <option value="2">In route</option>
                        <option value="3">Delivered</option>
                        <option value="4">Cancelled</option>
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-warning btn-lg btn-block">Edit Order</button><br><br>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection