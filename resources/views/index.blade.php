@extends('layouts.app')

@section('content')
    <section class="product-listing">
        <div class="container">
            <div class="section-title">
                <h3>Recent Listing Product</h3>
            </div>
            <div class="row">
                <image-list :images="{{ json_encode($images) }}" @@show-modal="openModal"></image-list>

            </div>
        </div>
    </section>
    <image-modal ref="imageModal"></image-modal>
@endsection
