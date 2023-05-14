@extends('layouts.master')

@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-12 col-lg-9 text-center">

        <table class="table table-hover table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Customer ID</th>
                        <th>Staff ID</th>
                        <th>Total</th>
                        <th>Subtotal</th>
                        <th>Tax</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td>
                                <a href=" {{route('route.show', $order->id)}} ">{{$order->id}}</a>
                            </td>
                            <td>{{$order->customer_id}}</td>
                            <td>{{$order->staff_id}}</td>
                            <td>${{ number_format($order->total, 2) }}</td>
                            <td>${{ number_format($order->subtotal, 2) }}</td>
                            <td>${{ number_format($order->tax, 2) }}</td>
                            <td>
                                @switch($order->status)
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
                    @empty
                        <p>There are no orders registered yet...</p>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection