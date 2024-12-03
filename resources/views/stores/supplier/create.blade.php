@extends('stores.layouts.master')
@section('body')


<style>
div#areaBox {
    position: relative;
}

.suggested_area {
    position: absolute;
    width: 93%;
    background: #dcdce1;
    border-radius: 2px;
    z-index: 9;
}

.wrap_suggest ul {
    padding: 0px;
    margin: 0px;
}

.wrap_suggest ul li {
    list-style: none;
    cursor: pointer;
    padding: 6px;
    border-bottom: 1px solid white;
}
</style>

<!-- START PAGE CONTENT-->
<div class="page-heading">
   @component('components.store_breadcrumb')

    @slot('page_title')
    @lang('supplier.add')
    @endslot


    @if(Auth::user()->can('Supplier Area view'))
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
    {{route('supplier.index')}}
    @endslot

    @endif

   @endcomponent
</div>
<div class="page-content fade-in-up">

   <div class="card">
    <div class="card-header">
        <b>@lang('supplier.add')</b>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('supplier.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6" id="areaBox">
                    <label for="area_id">@lang('supplier.area_id')</label><span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-sm @error('area_id') is-invalid @enderror" id="area_id" name="area_id" onkeyup="findArea()" value="{{ old('area_id') }}" autocomplete="off">
                    @error('area_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="suggested_area">
                        <div class="wrap_suggest">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <label for="supplier_name">@lang('supplier.supplier_name')</label><span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-sm @error('supplier_name') is-invalid @enderror" id="supplier_name" name="supplier_name" value="{{ old('supplier_name') }}">
                    @error('supplier_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <label for="supplier_name_bn">@lang('supplier.supplier_name_bn')</label>
                    <input type="text" class="form-control form-control-sm @error('supplier_name_bn') is-invalid @enderror" id="supplier_name_bn" name="supplier_name_bn" value="{{ old('supplier_name_bn') }}">
                    @error('supplier_name_bn')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-12 col-md-12 col-12 mt-2">
                    <label for="adress">@lang('supplier.adress')</label>
                    <textarea class="form-control" name="adress"></textarea>
                    @error('adress')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-2">
                    <label for="phone">@lang('supplier.phone')</label><span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-2">
                    <label for="previous_due">@lang('supplier.previous_due')</label><span class="text-danger">*</span>
                    <input type="number" class="form-control form-control-sm @error('previous_due') is-invalid @enderror" id="previous_due" name="previous_due" value="{{ old('previous_due') }}">
                    @error('previous_due')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 text-right mt-3">
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
        $('.suggested_area').hide();
        function findArea()
        {
            let area_id = $('#area_id').val();
            if(area_id != '')
            {
                $.ajax({
                    headers : {
                        'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                    },

                    url : '{{ url('findArea') }}',

                    type : 'POST',

                    data : {area_id},

                    beforeSend : function()
                    {
                        $('.loader').show();
                        $('#contentWrapper').css('opacity','0.5');
                        $('.wrap_suggest').html('Loading...');
                    },

                    success : function(res)
                    {
                        $('.loader').hide();
                        $('#contentWrapper').css('opacity','1');
                        if(res != 'error')
                        {
                            $('.suggested_area').show();
                            $('.wrap_suggest').html(res);
                        }
                        else
                        {
                            $('.suggested_area').hide();
                        }
                    }
                });
            }
            else
            {
                $('.suggested_area').hide();
            }
        }

        function getAreaName(id)
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ url('getAreaName') }}/'+id,

                type : 'GET',

                beforeSend : function()
                {
                    $('.loader').show();
                    $('#contentWrapper').css('opacity','0.5');
                },

                success : function(res)
                {
                    $('#contentWrapper').css('opacity','1');
                    $('.loader').hide();
                    $('#area_id').val(res);
                    $('.wrap_suggest').html('');
                    $('.suggested_area').hide();
                }
            })
        }
    </script>
@endpush

@endsection
