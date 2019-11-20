@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')

    <br><br><br><br><br><br><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('frontEnd.layouts.category_menu')
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Articulos</h2>
                        <div class ="row">
                        @foreach($products as $product)

                            @if($product->category->status==1)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper card card_shadow">
                                        <div class="single-products">
                                            <a href="{{url('/product-detail',$product->id)}}" style ="color: white"><div class="trapezoid3 "><p style="padding-top: 10%">Comprar</p></div></a><br><br>
                                            <div class="productinfo text-center">
                                                <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" width="30em" height="200em"/></a>
                                                <h2>$ {{$product->price}}</h2>
                                                <p>{{$product->p_name}}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                        </div>
                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>
@endsection
