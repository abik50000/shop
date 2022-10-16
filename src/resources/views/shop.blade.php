@extends('layouts.app')
@section('title', $category)
@section('content')


@include('layouts.breadcrumbs', [
    'links' => [
        '#' => $category
    ]
])

<!--shop  area start-->
<div class="shop_area mt-100 mb-100">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">

                        <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip"
                            title="3"></button>

                        <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip"
                            title="List"></button>
                    </div>
                    <div class="page_amount">
                        <p>Showing {{ $products->count() }} from {{ $products->total() }}</p>
                    </div>
                </div>


                <!--shop toolbar end-->
                <div class="row shop_wrapper">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-4 col-12 ">

                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{ route('product', [$product->slug]) }}"><img
                                            src="/assets/img/product/product{{ ($product->id % 10 + 1) }}.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-7%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart">
                                                <a href="{{ route('cart') }}" title="Add to cart"><i
                                                        class="icon-shopping-bag"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="product_price_rating">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="{{ route('product', [$product->slug]) }}">{{ $product->name }}</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">${{ $product->price }}</span>
                                            <span class="old_price">${{ $product->price }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="{{ route('product', [$product->slug]) }}">{{ $product->name }}</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">${{ $product->price }}</span>
                                        <span class="old_price">${{ $product->price }}</span>
                                    </div>
                                    <div class="product_desc">
                                        <div>{!! $product->description !!}</div>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{ route('cart') }}" title="Add to cart">Add to
                                                    cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                </div>

                <div class=" t_bottom">
                    {{ $products->links() }}
                </div>
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>

            <div class="col-lg-3 col-md-12">
                <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_inner">

                        @foreach($categories as $cat)
                        <div class="widget_list widget_categories">
                            <h3><a href="/shop/{{ $cat->slug }}">{{ $cat->name }}</a></h3>
                            <ul>

                                @foreach($cat->children as $secondCat)
                                <li class="widget_sub_categories sub_categories1" style="display:block">
                                    <a href="/shop/{{ $secondCat->slug }}">{{ $secondCat->name }}</a>

                                    @foreach($secondCat->children as $thirdCat)
                                    <ul class="widget_dropdown_categories dropdown_categories1" style="display:block">
                                        <li><a href="/shop/{{ $thirdCat->slug }}">{{ $thirdCat->name }}</a></li>
                                    </ul>
                                    @endforeach

                                </li>
                                @endforeach

                            </ul>
                        </div>
                        @endforeach

                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>

        </div>
    </div>
</div>
<!--shop  area end-->


@endsection
@section('scripts')
<script>

</script>
@endsection
