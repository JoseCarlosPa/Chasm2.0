@extends('frontEnd.layouts.master')
@section('title','Tienda')
@section('slider')
@endsection
@section('content')


    @if((new \Jenssegers\Agent\Agent())->isDesktop())
    <div class="header_container">
        <br><br><br><br><br><br><br><br><br><br>
    </div>
    <br><br>
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
                                                <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" width="30em" height="200em"/>
                                                <br><br>
                                                <h2><img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" alt="" width="3em"
                                                         height="40px"/> <br><br>$
                                                    @if(Auth::check())
                                                        {{$product->price_u}}
                                                    @else
                                                        {{$product->price}}
                                                    @endif
                                                </h2>

                                                <p>{{$product->p_name}}</p>
                                                </a>
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

            <div class ="row">
                <div class ="col-sm-12 text-center">
                    <p>{{ $products->links() }}</p>
                </div>
            </div>
        </div>
    </section>

    @endif

    @if((new \Jenssegers\Agent\Agent())->isMobile())
        <div class="header_container">
            <br><br><br><br><br><br><br><br><br><br>
        </div>
        <br><br>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        @include('frontEnd.layouts.category_menu')
                    </div>
                    <div class="col-sm-12">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Articulos</h2>
                            <div class ="row">
                                <div class ="col-sm-12">
                                    @foreach($products as $product)
                                        @if($product->category->status==1)

                                            <div class="col-sm-2">
                                                <div class="product-image-wrapper card card_shadow">
                                                    <div class="single-products">
                                                        <a href="{{url('/product-detail',$product->id)}}" style ="color: white"><div class="trapezoid3 "><p style="padding-top: 10%">Comprar</p></div></a><br><br>
                                                        <div class="productinfo text-center">
                                                            <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" width="30em" height="200em"/></a>
                                                            <br><br>
                                                            <h2><img src="{{asset('frontEnd/imgs/miniaturas/carrito.svg')}}" alt="" width="3em"
                                                                     height="40px"/> <br><br>$
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
                            </div>
                        </div><!--features_items-->
                    </div>
                </div>


            </div>
        </section>
        <div class ="row">
            <div class ="col-sm-12 text-left">
                <p>{{ $products->onEachSide(1)->links() }}</p>
            </div>
        </div>
    @endif
@endsection
