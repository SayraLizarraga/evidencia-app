@extends('layouts.master')

@section('content')

<br>
<div class="container text-center">

<table class="table table-hover table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Total</th>
                        <th>Subtotal</th>
                        <th>Tax Fee</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                        <tr>
                            <td>{{$orders->id}}</td>
                            <td>${{ number_format($orders->total, 2) }}</td>
                            <td>${{ number_format($orders->subtotal, 2) }}</td>
                            <td>${{ number_format($orders->tax, 2) }}</td>
                            <td>
                                @switch($orders->status)
                                    @case(0)
                                        Processing
                                        @break
                                    @case(1)
                                        Ready to be delivered
                                        @break
                                    @case(2)
                                        In route
                                        @break
                                    @case(3)
                                        Delivered
                                        @break
                                    @case(4)
                                        Cancelled
                                        @break
                                    @default
                                        Processing
                                        @break
                                @endswitch
                            </td>
                        </tr>

                </tbody>
            </table>
</div>

@endsection

@section('button')
    <div class="container">
        <div class="row text-end">
            <div class="col-12">
                <a href="{{ route('route.edit', $orders->id) }}" class="btn btn-warning btn-lg">Edit Order</a>
            </div>
        </div>
    </div>
@endsection