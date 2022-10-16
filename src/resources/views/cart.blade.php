@extends('layouts.app')
@section('title', 'Cart')
@section('content')


@include('layouts.breadcrumbs', [
    'links' => [
        '#' => 'Cart'
    ]
])

   <!--shopping cart area start -->
    <div class="shopping_cart_area mt-100">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="assets/img/s-product/product.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                            <td class="product-price">£65.00</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1"
                                                    max="100" value="1" type="number"></td>
                                            <td class="product_total">£130.00</td>


                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <span class="mr-3"><b>Total: </b>$120.00</span>
                                <button type="submit">update cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--shopping cart area end -->


@endsection
@section('scripts')
<script>

</script>
@endsection
