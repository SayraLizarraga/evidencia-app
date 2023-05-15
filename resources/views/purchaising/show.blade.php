@extends('layouts.master')

@section('content')

<br><br>
<div class="container text-center">

<table class="table table-hover table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Product ID</th>
                        <th>Quantity</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                        <tr>
                        <td>{{$requests-> id}}</td>
                        <td>{{$requests -> product_id}}</td>
                        <td>{{$requests -> quantity}}</td>
                        <td>
                            @switch($requests -> status)
                                @case(0)
                                    Out of stock
                                    @break
                                @case(2)
                                    Available
                                    @break
                            @endswitch
                        </td>
                        </tr>

                </tbody>
            </table>
</div>
<div class="container">
        <div class="row text-end">
            <div class="col-12">
                <a href="{{ route('purchaising.edit', $requests->id) }}" class="btn btn-warning btn-lg">Edit Request</a>
            </div>
        </div>
    </div>
@endsection
@section('button')
    <div class="container">
        <div class="row text-end">
            <div class="col-12">
                <a href="{{ route('purchaising.index', $requests->id) }}" class="btn btn-primary btn-lg">View Requests</a>
            </div>
        </div>
    </div>
@endsection

    
