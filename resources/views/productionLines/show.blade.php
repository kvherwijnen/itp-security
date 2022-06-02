@extends('layouts.master')

@section('content')
    <section class="section">
            <h1>Cape {{ $production_line->production_line }}</h1>
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-parent">
            @foreach($production_line->orders as $order)
                <a href="{{ route('orders.show', $order) }}">
                    <div class="my-2">
                            <div class="tile is-child box">
                                <p class="title">Order {{ $order->ordernumber }}</p>
                                <p class="has-text-link-dark"> {{ $order->notes }} </p>
                                <div class="stepper-wrapper">
                                    <div class="stepper-item completed">
                                        <div class="step-counter"></div>
                                        <div class="step-name">Admin</div>
                                    </div>
                                    <div class="stepper-item {{ $order->driver_done ? 'completed' : 'active' }}"
                                         id="driver">
                                        <div class="step-counter"></div>
                                        <div class="step-name">Driver</div>
                                    </div>
                                    <div
                                        class="stepper-item active {{ $order->production_done ? 'completed' : 'active' }} "
                                        id="production">
                                        <div class="step-counter"></div>
                                        <div class="step-name">Production</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
    </section>

@endsection


