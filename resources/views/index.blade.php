@extends('layouts.app')

@section('content')
<section class="product-listing">
    <div class="container">
        <div class="section-title">
            <h3>Recent Listing Product</h3>
        </div>
        <div class="row">
            @foreach ($images as $key => $image)
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="product-item">
                        <div class="product-image" style="">
                            <img class="img-fluid" src="{{ $image['url'] }}" alt="{{ $image['description'] }}"
                                alt="Product {{ $key + 1 }}">
                        </div>
                        <div class="product-info">
                            <h4 class="product-name">
                                <a href="#" data-toggle="modal"  data-toggle="modal" data-target="#imageModal"
                                data-image-src="{{ $image['url'] }}" data-image-alt="{{ $image['description'] }}"
                                    data-target="#imageModal">{{ $image['description'] }}</a>
                            </h4>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div >
    Vue 3 + Vite + Laravel 10
    <hello-world></hello-world>
</div>

<!-- Single Modal for Images -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body d-flex justify-content-center align-items-center">
            <img class="img-fluid" id="modalImage" alt="">
        </div>

    </div>
</div>
</div>
@endsection
