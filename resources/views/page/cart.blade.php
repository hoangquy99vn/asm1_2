@extends('master')
@section('content')
<body class="goto-here">
    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
                    <h1 class="mb-0 bread">My Wishlist</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    
                        <table class="table ">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                              @if(Session::has('cart'))
                              @foreach($product_cart as $product)                          
                                <tr class="text-center">
                                    <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url({{Voyager::image($product['item']['hinh_sp'])}})">
                                        </div>
                                    </td>

                                    <td class="product-name">
                                        <h3>{{$product['item']['ten_sp']}}</h3>
                                        <!-- <p>Far far away, behind the word mountains, far from the countries</p> -->
                                    </td>

                                    <td class="price">${{$product['item']['gia_sp']}}</td>
                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                            <input type="text" name="quantity"
                                                class="quantity form-control input-number" value="{{$product['qty']}}" min="1" max="100">
                                        </div>
                                    </td>
                                    <!-- <td class="total">${{$product['item']['gia_sp']}}</td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex">
                            <span>Total Quantity</span>
                            <span>{{Session('cart')->totalQty}}</span>
                        </p>
                        <p class="d-flex">
                            <span>SubTotal</span>
                            <span>{{Session('cart')->totalPrice}}</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Oder Total</span>
                            <span>${{Session('cart')->totalPrice}}</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to
                            Checkout</a></p>
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection


    