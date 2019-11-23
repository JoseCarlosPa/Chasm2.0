@extends('frontEnd.layouts.master')
@section('title','Lista de productos')
@section('slider')
@endsection
@section('content')
    <div class="header_container">
        <br><br><br><br><br><br><br><br><br><br>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('frontEnd.layouts.category_menu')
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <?php
                            if($byCate!=""){
                                $products=$list_product;
                                echo '<h2 class="title text-center">Categoria '.$byCate->name.'</h2>';
                            }else{
                                echo '<h2 class="title text-center">Lista de Productos</h2>';
                            }
                    ?>
                    <div class ="row">
                    @foreach($products as $product)
                            @if($product->category->status==1)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper card card_shadow">
                                        <div class="single-products">
                                            <a href="{{url('/product-detail',$product->id)}}" style ="color: white"><div class="trapezoid3 "><p style="padding-top: 10%">Comprar</p></div></a><br><br>
                                            <div class="productinfo text-center">
                                                <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" width="30em" height="200em"/></a>
                                                <br><br>
                                                <h2><img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" alt="" width="3em"
                                                         height="40px"/> <br><br>$</a>
                                                    @if(Auth::check())
                                                        {{$product->price_u}}
                                                    @else
                                                        {{$product->price}}
                                                    @endif
                                                </h2>
                                                <p>{{$product->p_name}}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    @endforeach
                        </div>
                    <div class ="row">
                        <div class ="col-sm-12 text-center">
                            <p>{{ $products->links() }}</p>
                        </div>
                    </div>
                </div><!--features_items-->
            </div>
        </div>
    </div>
@endsection
