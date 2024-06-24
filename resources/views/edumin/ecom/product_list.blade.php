@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard template</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Product List</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xxl-4 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-md-5 col-xxl-12">
                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                <div class="new-arrivals-img-contnent">
                                    <a href="{{ url('ecom-product-detail') }}"><img class="img-fluid" src="{{ asset('images/product/2.jpg') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xxl-12">
                            <div class="new-arrival-content position-relative">
                                <h4><a href="{{ url('ecom-product-detail') }}">Color Pencils</a></h4>
                                <p class="price">$320.00</p>
                                <div class="comment-review star-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-stroke"></i></li>
                                        <li><i class="fa fa-star-half-stroke"></i></li>
                                    </ul>
                                    <span class="review-text">(34 reviews) / </span><a
                                        class="product-review style-1 fs-14" href="" data-bs-toggle="modal"
                                        data-bs-target="#reviewModal">Write a review?</a>
                                </div>
                                <p>Availability: <span class="item"> In stock <i
                                            class="fa fa-check-circle text-success"></i></span></p>
                                <p>Product code: <span class="item">0405689</span> </p>
                                <p>Brand: <span class="item">Lee</span></p>
                                <p class="text-content">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xxl-4 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-md-5 col-xxl-12">
                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                <div class="new-arrivals-img-contnent">
                                    <a href="{{ url('ecom-product-detail') }}"><img class="img-fluid" src="{{ asset('images/product/3.jpg') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xxl-12">
                            <div class="new-arrival-content position-relative">
                                <h4><a href="{{ url('ecom-product-detail') }}">Pencils</a></h4>
                                <p class="price">$325.00</p>
                                <div class="comment-review star-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-stroke"></i></li>
                                        <li><i class="fa fa-star-half-stroke"></i></li>
                                    </ul>
                                    <span class="review-text">(34 reviews) / </span><a
                                        class="product-review style-1 fs-14" href="" data-bs-toggle="modal"
                                        data-bs-target="#reviewModal">Write a review?</a>
                                </div>
                                <p>Availability: <span class="item"> In stock <i
                                            class="fa fa-check-circle text-success"></i></span></p>
                                <p>Product code: <span class="item">0405689</span> </p>
                                <p>Brand: <span class="item">Lee</span></p>
                                <p class="text-content">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xxl-4 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-md-5 col-xxl-12">
                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                <div class="new-arrivals-img-contnent">
                                    <a href="{{ url('ecom-product-detail') }}"><img class="img-fluid" src="{{ asset('images/product/4.jpg') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xxl-12">
                            <div class="new-arrival-content position-relative">
                                <h4><a href="{{ url('ecom-product-detail') }}">Stapler</a></h4>
                                <p class="price">$480.00</p>
                                <div class="comment-review star-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="review-text">(34 reviews) / </span><a
                                        class="product-review style-1 fs-14" href="" data-bs-toggle="modal"
                                        data-bs-target="#reviewModal">Write a review?</a>
                                </div>
                                <p>Availability: <span class="item"> In stock <i
                                            class="fa fa-check-circle text-success"></i></span></p>
                                <p>Product code: <span class="item">0405689</span> </p>
                                <p>Brand: <span class="item">Lee</span></p>
                                <p class="text-content">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xxl-4 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-md-5 col-xxl-12">
                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                <div class="new-arrivals-img-contnent">
                                    <a href="{{ url('ecom-product-detail') }}"><img class="img-fluid"
                                            src="{{ asset('images/product/5.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xxl-12">
                            <div class="new-arrival-content position-relative">
                                <h4><a href="{{ url('ecom-product-detail') }}">Project Book</a></h4>
                                <p class="price">$658.00</p>
                                <div class="comment-review star-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="review-text">(34 reviews) / </span><a
                                        class="product-review style-1 fs-14" href="" data-bs-toggle="modal"
                                        data-bs-target="#reviewModal">Write a review?</a>
                                </div>
                                <p>Availability: <span class="item"> In stock <i
                                            class="fa fa-check-circle text-success"></i></span></p>
                                <p>Product code: <span class="item">0405689</span> </p>
                                <p>Brand: <span class="item">Lee</span></p>
                                <p class="text-content">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xxl-4 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-md-5 col-xxl-12">
                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                <div class="new-arrivals-img-contnent">
                                    <a href="{{ url('ecom-product-detail') }}"><img class="img-fluid"
                                            src="{{ asset('images/product/6.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xxl-12">
                            <div class="new-arrival-content position-relative">
                                <h4><a href="{{ url('ecom-product-detail') }}">Colorful Book</a></h4>
                                <p class="price">$280.00</p>
                                <div class="comment-review star-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="review-text">(34 reviews) / </span><a
                                        class="product-review style-1 fs-14" href="" data-bs-toggle="modal"
                                        data-bs-target="#reviewModal">Write a review?</a>
                                </div>
                                <p>Availability: <span class="item"> In stock <i
                                            class="fa fa-check-circle text-success"></i></span></p>
                                <p>Product code: <span class="item">0405689</span> </p>
                                <p>Brand: <span class="item">Lee</span></p>
                                <p class="text-content">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xxl-4 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-md-5 col-xxl-12">
                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                <div class="new-arrivals-img-contnent">
                                    <a href="{{ url('ecom-product-detail') }}"><img class="img-fluid"
                                            src="{{ asset('images/product/7.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xxl-12">
                            <div class="new-arrival-content position-relative">
                                <h4><a href="{{ url('ecom-product-detail') }}">Notebook</a></h4>
                                <p class="price">$600.00</p>
                                <div class="comment-review star-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="review-text">(34 reviews) / </span><a
                                        class="product-review style-1 fs-14" href="" data-bs-toggle="modal"
                                        data-bs-target="#reviewModal">Write a review?</a>
                                </div>
                                <p>Availability: <span class="item"> In stock <i
                                            class="fa fa-check-circle text-success"></i></span></p>
                                <p>Product code: <span class="item">0405689</span> </p>
                                <p>Brand: <span class="item">Lee</span></p>
                                <p class="text-content">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- review -->
        <div class="modal fade" id="reviewModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="text-center mb-4">
                                <img class="img-fluid rounded" width="78" src="./images/avatar/1.jpg"
                                    alt="DexignZone">
                            </div>
                            <div class="mb-3">
                                <div class="rating-widget mb-4 text-center">
                                    <!-- Rating Stars Box -->
                                    <div class="rating-stars">
                                        <ul id="stars">
                                            <li class="star" title="Poor" data-value="1">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                            <li class="star" title="Fair" data-value="2">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                            <li class="star" title="Good" data-value="3">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                            <li class="star" title="Excellent" data-value="4">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                            <li class="star" title="WOW!!!" data-value="5">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                            </div>
                            <button class="btn btn-success btn-block">RATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection