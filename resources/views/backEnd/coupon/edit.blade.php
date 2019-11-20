@extends('backEnd.layouts.master')
@section('title','Edit Coupons Page')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="{{route('coupon.index')}}">Cupones</a> <a href="#" class="current">Editar Cupón</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Añadir nuevo cupón</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('coupon.update',$edit_coupons->id)}}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field("PUT")}}
                    <div class="control-group">
                        <label for="coupon_code" class="control-label">Código de cupón</label>
                        <div class="controls{{$errors->has('coupon_code')?' has-error':''}}">
                            <input type="text" name="coupon_code" id="coupon_code" class="form-control" value="{{$edit_coupons->coupon_code}}"
                                   title="" required="required" minlength="5" maxlength="15" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('coupon_code')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="amount" class="control-label">Cantidad</label>
                        <div class="controls{{$errors->has('amount')?' has-error':''}}">
                            <input type="number" min="0" name="amount" id="amount" class="form-control" value="{{$edit_coupons->amount}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('amount')}}</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="amount_type" class="control-label">Tipo de unidad</label>
                        <div class="controls{{$errors->has('amount_type')?' has-error':''}}">
                            <select name="amount_type" id="amount_type" class="form-control" style="width: 415px;">
                                <option value="Percentage">Porcentaje</option>
                            </select>
                            <span class="text-danger">{{$errors->first('amount_type')}}</span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="expiry_date" class="control-label">Fecha de expiración</label>
                        <div class="controls{{$errors->has('expiry_date')?' has-error':''}}">
                            <div class="input-prepend">
                                <div  data-date="12-02-2012" class="input-append date datepicker">
                                    <input type="text" name="expiry_date" id="expiry_date" value="{{$edit_coupons->expiry_date}}"  data-date-format="yyyy-mm-dd" class="span11" style="width: 375px;" placeholder="yyyy-mm-dd">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                            </div>
                            <span class="text-danger">{{$errors->first('expiry_date')}}</span>
                        </div>
                    </div>

                    <div class="control-group{{$errors->has('status')?' has-error':''}}">
                        <label class="control-label">Habilitar:</label>
                        <div class="controls">
                            <input type="checkbox" name="status" id="status" value="1" {{$edit_coupons->status==1?'checked':''}}>
                            <span class="text-danger">{{$errors->first('status')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Actualizar cupón</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection
