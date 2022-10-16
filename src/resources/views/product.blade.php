@extends('layouts.app')
@section('title', 'Contact us')
@section('content')

@include('layouts.breadcrumbs', [
    'links' => [
        $product->category ? $product->category->slug : '/' => $product->category ? $product->category->name : 'Without category',
        $product->slug => $product->name
    ]
])

<!--product details start-->
<div class="product_details mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="/assets/img/product/product{{ ($product->id % 10 + 1) }}.jpg"
                                data-zoom-image="/assets/img/product/product{{ ($product->id % 10 + 1) }}.jpg" alt="big-1">
                        </a>
                    </div>
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="/assets/img/product/productbig4.jpg"
                                    data-zoom-image="/assets/img/product/productbig4.jpg">
                                    <img src="/assets/img/product/productbig4.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="/assets/img/product/productbig1.jpg"
                                    data-zoom-image="/assets/img/product/productbig1.jpg">
                                    <img src="/assets/img/product/productbig1.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="/assets/img/product/productbig2.jpg"
                                    data-zoom-image="/assets/img/product/productbig2.jpg">
                                    <img src="/assets/img/product/productbig2.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="/assets/img/product/productbig3.jpg"
                                    data-zoom-image="/assets/img/product/productbig3.jpg">
                                    <img src="/assets/img/product/productbig3.jpg" alt="zo-th-1" />
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                    <form action="#">

                        <h1><a href="#">{{ $product->name }}</a></h1>

                        <div class=" product_ratting">
                            <ul>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                                <li><a href="#"><i class="icon-star"></i></a></li>
                                <li class="review"><a href="#"> (customer review ) </a></li>
                            </ul>

                        </div>
                        <div class="price_box">
                            <span class="current_price">${{ $product->price }}</span>
                            <span class="old_price">${{ $product->price }}</span>

                        </div>
                        <div class="product_desc">
                            <div>{!! $product->description !!}</div>
                        </div>
                        <div class="product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" value="1" type="number">
                            <button class="button" type="submit">add to cart</button>
                        </div>

                        <div class="product_meta">
                            <span>Category:
                                @if($product->category)

                                    @if($product->category->parent)
                                        <a href="{{ route('category', $product->category->parent->slug) }}">
                                            {{ $product->category->parent->name }}
                                        </a>
                                    @endif

                                    <a href="{{ route('category', $product->category->slug) }}">{{ $product->category->name }}</a>
                                @else
                                    <a href="{{ route('index') }}">Without category</a>
                                @endif

                            </span>
                        </div>

                    </form>
                    <div class="priduct_social">
                        <ul>
                            <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                                    Like</a></li>
                            <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a>
                            </li>
                            <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i>
                                    save</a></li>
                            <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                                    share</a></li>
                            <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i>
                                    linked</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--product details end-->



@endsection
@section('scripts')
<script>

</script>
@endsection
