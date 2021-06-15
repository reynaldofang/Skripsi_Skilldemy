@extends('site.app')
@section('title', 'Order - Learner')
@section('content')

<main id="main" class="main-background">


    <div class="container">
        <div class="row">
            <main class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-hover" id="table-order">
                        <thead>
                            <tr>
                                <th scope="col">No. Order</th>
                                <th scope="col">Nama</th>

                                <th scope="col">Total Pembayaran</th>

                                <th scope="col">Status</th>
                                <th scope="col">Pembayaran</th>
                                <th scope="col">Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->order_number }}</th>
                                <td>{{ $order->name }}</td>

                                <td>{{ config('settings.currency_symbol') }}{{ number_format($order->grand_total, 0, ',','.') }}
                                </td>
                                <td>
                                    @if ($order->status == "decline")
                                    <span class="badge badge-danger">{{ strtoupper($order->status) }}</span>
                                    @elseif ($order->status == "processing payment")
                                    <span class="badge badge-warning">{{ strtoupper($order->status) }}</span>
                                    @elseif ($order->status == "pending")
                                    <span class="badge badge-warning">{{ strtoupper($order->status) }}</span>
                                    @elseif($order->status == "awaiting payment")
                                    <span class="badge badge-warning">{{ strtoupper($order->status) }}</span>
                                    @elseif($order->status == "completed")
                                    <span class="badge badge-success">{{ strtoupper($order->status) }}</span>
                                    @endif
                                </td>

                                <td>
                                    @if ($order->status == "pending")
                                    <div>
                                        <span class="m-2" style="color: #e2771b;"><b>Sedang Diproses</b></span>
                                        <a href="{{ route('account.orders.cancel',$order->order_number) }}"
                                            class="btn btn-sm btn-danger">Cancel</a>
                                    </div>
                                    @elseif ($order->status == "awaiting payment")
                                    <div>
                                        <a href="{{ route('account.transfers',$order->order_number) }}"
                                            class="btn btn-sm btn-primary">Transfer</a>

                                        <a href="{{ route('account.orders.cancel',$order->order_number) }}"
                                            class="btn btn-sm btn-danger">Cancel</a>
                                    </div>
                                    @elseif($order->status == "completed")
                                    <div>
                                        <span class="badge badge-success">{{ strtoupper($order->status) }}</span>
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    @if($order->status == "completed")
                                    <a href="{{ route('account.orders.show', $order->order_number) }}"
                                        class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                    @else
                                    <button class="btn btn-sm btn-primary" disabled><i class="fa fa-eye"></i></button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <div class="col-sm-12">
                                <p class="alert alert-warning">No orders to display.</p>
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

</main>