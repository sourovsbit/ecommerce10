@extends('stores.layouts.master')
@section('body')
<!-- START PAGE CONTENT-->
<div class="page-heading">
   @component('components.store_breadcrumb')

    @slot('page_title')
    @lang('product.add')
    @endslot


    @if(Auth::user()->can('Product Add view'))
    <!-- button one -->
    @slot('button_one_name')
    @lang('common.view')
    @endslot

    @slot('button_one_class')
    btn btn-outline-info btn-sm
    @endslot

    @slot('button_one_icon')
    fa fa-eye
    @endslot

    @slot('button_one_route')
    {{route('product.index')}}
    @endslot

    @endif

   @endcomponent
</div>
<div class="page-content fade-in-up">

   <div class="card">
    <div class="card-header">
        <b>@lang('product.add')</b>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('product.store') }}">
            @csrf
        <div class="row">
            <div class="col-lg-4 col-md-6 col-6">
                <label for="item_id">@lang('product.select_item')</label><span class="text-danger">*</span>
                <select class="form-control form-control-sm js-example-basic-single" name="item_id" id="item_id" onchange="findCategory()">
                    <option value="">@lang('common.select_one')</option>
                    @if(isset($data['item']))
                    @foreach ($data['item'] as $i)
                    <option
                    @if(old('item_id') == $i->id)
                    selected
                    @endif
                    value="{{ $i->id }}">
                        @if(config('app.locale') == 'en')
                        {{ $i->item_name ?: $i->item_name_bn }}
                        @elseif(config('app.loale') == 'bn')
                        {{ $i->item_name_bn ?: $i->item_name }}
                        @endif
                    </option>
                    @endforeach
                    @endif
                </select>
                @error('item_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <label for="cat_id">@lang('product.select_category')</label><span class="text-danger">*</span>
                <select class="form-control form-control-sm js-example-basic-single" name="cat_id" id="cat_id">
                    <option value="">@lang('common.select_one')</option>

                </select>
                @error('cat_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <label for="brand_id">@lang('product.select_brand')</label><span class="text-danger">*</span>
                <select class="form-control form-control-sm js-example-basic-single" name="brand_id" id="brand_id" >
                    <option value="">@lang('common.select_one')</option>
                    @if(isset($data['brand']))
                    @foreach ($data['brand'] as $i)
                    <option
                    @if(old('brand_id') == $i->id)
                    selected
                    @endif
                    value="{{ $i->id }}">
                        @if(config('app.locale') == 'en')
                        {{ $i->brand_name ?: $i->brand_name_bn }}
                        @elseif(config('app.loale') == 'bn')
                        {{ $i->brand_name_bn ?: $i->brand_name }}
                        @endif
                    </option>
                    @endforeach
                    @endif
                </select>
                @error('brand_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-3">
                <label for="product_name">@lang('product.product_name')</label><span class="text-danger">*</span>
                <input type="text" class="form-control form-control-sm @error('product_name') is-invalid @enderror" id="product_name" name="product_name" value="{{ old('product_name') }}">
                @error('product_name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-3">
                <label for="product_name_bn">@lang('product.product_name_bn')</label>
                <input type="text" class="form-control form-control-sm @error('product_name_bn') is-invalid @enderror" id="product_name_bn" name="product_name_bn" value="{{ old('product_name_bn') }}">
                @error('product_name_bn')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-3">
                <label for="purchase_price">@lang('product.purchase_price')</label><span class="text-danger">*</span>
                <input type="number" class="form-control form-control-sm @error('purchase_price') is-invalid @enderror" id="purchase_price" name="purchase_price" value="{{ old('purchase_price') }}">
                @error('purchase_price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-3">
                <label for="sale_price">@lang('product.sale_price')</label><span class="text-danger">*</span>
                <input type="number" class="form-control form-control-sm @error('sale_price') is-invalid @enderror" id="sale_price" name="sale_price" value="{{ old('sale_price') }}">
                @error('sale_price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-3">
                <label for="shelf_no">@lang('product.shelf_no')</label>
                <input type="text" class="form-control form-control-sm @error('shelf_no') is-invalid @enderror" id="shelf_no" name="shelf_no" value="{{ old('shelf_no') }}">
                @error('shelf_no')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-3">
                <label for="stock_alert">@lang('product.stock_alert')</label>
                <input type="text" class="form-control form-control-sm @error('stock_alert') is-invalid @enderror" id="stock_alert" name="stock_alert" value="{{ old('stock_alert') }}">
                @error('stock_alert')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-3">
                <label for="unit_id">@lang('product.select_unit')</label><span class="text-danger">*</span>
                <select class="form-control form-control-sm js-example-basic-single" name="unit_id" id="unit_id">
                    <option value="">@lang('common.select_one')</option>
                    @if(isset($data['unit']))
                    @foreach ($data['unit'] as $i)
                    <option
                    @if(old('unit_id') == $i->id)
                    selected
                    @endif
                    value="{{ $i->id }}">
                        @if(config('app.locale') == 'en')
                        {{ $i->unit_name ?: $i->unit_name_bn }}
                        @elseif(config('app.loale') == 'bn')
                        {{ $i->unit_name_bn ?: $i->unit_name }}
                        @endif
                    </option>
                    @endforeach
                    @endif
                </select>
                @error('unit_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-3 col-md-6 col-6 mt-3">
                <label for="type">@lang('product.type')</label><span class="text-danger">*</span>
                <select class="form-control form-control-sm js-example-basic-single" name="type" id="type" onchange="getProductVariation()">
                    <option  value="">@lang('common.select_one')</option>
                   <option @if(old('type') == 1) selected @endif  value="1">@lang('product.simple')</option>
                   <option @if(old('type') == 2) selected @endif  value="2">@lang('product.variable')</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="col-lg-12 col-md-12 col-12 mt-3" id="show_variation">

            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4" style="text-align: right">
                <button class="btn btn-info btn-sm"><i class="fa fa-save"></i> @lang('common.submit')</button>
            </div>

        </div>
    </form>
    </div>
   </div>


</div>
<!-- END PAGE CONTENT-->
@push('footer_scripts')


<script>

    $(document).ready(function(){
        setTimeout(() => {
            findCategory();
            getProductVariation();
        }, 1000);
    });

    function findCategory()
    {
        var item_id = $('#item_id').val();
        if(item_id != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ url('find_cat') }}/'+item_id,

                type : 'GET',

                beforeSend : function()
                {

                },

                success : function(res)
                {
                    $('#cat_id').html(res);
                }
            })
        }
    }


    function getProductVariation()
    {
        var type = $('#type').val();
        if(type == 2)
        {
            $.ajax({
                headers : {
                    'CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ url('getProductVariation') }}/'+type,


                type : 'GET',


                beforeSend: function()
                {
                    $('#show_variation').show();
                    $('#show_variation').html('Loading...');
                },

                success : function(res)
                {
                    $('#show_variation').html(res);
                }


            });
        }
        else
        {
            $('#show_variation').hide();
        }
    }
</script>


<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endpush
@endsection
