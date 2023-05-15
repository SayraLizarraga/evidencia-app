@extends('layouts.master')

@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-12 col-lg-9 text-center">

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
                    @forelse  ($requests as $requests)
                    <tr>
                        <td>
                        <a href=" {{route('purchaising.show', $requests->id)}} ">Request {{$requests-> id}}</a>
                        </td>
                        <td>{{$requests -> product_id}}</td>
                        <td>{{$requests -> quantity}}</td>
                        <td>
                            @switch($requests -> status)
                                @case(0)
                                    Out of stock
                                    @break
                                @case(1)
                                    Available
                                    @break
                            @endswitch
                        </td>
                 
                    </tr>
                    @empty
                    <p>There're no Request</p>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection