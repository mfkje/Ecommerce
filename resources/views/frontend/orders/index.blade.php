@extends('layouts.front')

@section('title')
Order History
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Order History</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class = "table-light">
                                <tr>
                                    <th>Order Date</th>
                                    <th>Tracking Number</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders->sortByDesc('created_at') as $item)
                                    <tr>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>${{ $item->total_amount }}</td>
                                        <td>{{ $item->status == '0' ?'processing' : 'shipped' }}</td>
                                        <td>
                                            <a href="{{ url('view-order/'.$item->id) }}" >View Order Details</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
