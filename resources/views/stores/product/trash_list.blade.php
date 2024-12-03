@extends('stores.layouts.master')
@section('body')
<!-- START PAGE CONTENT-->
<div class="page-heading">
   @component('components.store_breadcrumb')

    @slot('page_title')
    @lang('product.trash_title')
    @endslot


    @if(Auth::user()->can('Product Add view'))
    <!-- button one -->
    @slot('button_one_name')
    @lang('common.create')
    @endslot

    @slot('button_one_class')
    btn btn-outline-dark btn-sm
    @endslot

    @slot('button_one_icon')
    fa fa-plus
    @endslot

    @slot('button_one_route')
    {{route('product.create')}}
    @endslot

    @endif


    @if(Auth::user()->can('Product Add trash'))
    <!-- button one -->
    @slot('button_two_name')
    @lang('common.view')
    @endslot

    @slot('button_two_class')
    btn btn-info btn-sm
    @endslot

    @slot('button_two_icon')
    fa fa-eye
    @endslot

    @slot('button_two_route')
    {{route('product.index')}}
    @endslot

    @endif

   @endcomponent
</div>
<div class="page-content fade-in-up">

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-6">
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
                <div class="col-lg-3 col-md-6 col-6">
                    <label for="product_name">@lang('product.product_name')</label>
                    <input type="text" class="form-control form-control-sm @error('product_name') is-invalid @enderror" id="product_name" name="product_name" value="{{ old('product_name') }}">
                    @error('product_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <button onclick="filterProduct()" class="btn btn-info btn-sm"><i class="fa fa-filter"></i> @lang('common.filter')</button>
            </div>
        </div>
    </div>

   <div class="card">
    <div class="card-header">
        <b>@lang('product.trash_title')</b>
    </div>
    <div class="card-body">
        <div class="show_data">
            <table class="table" id="example-table">
                <thead>
                    <tr>
                        <th>@lang('product.product_id')</th>
                        <th>@lang('product.product_info')</th>
                        <th>@lang('product.product_name')</th>
                        <th>@lang('product.pricing')</th>
                        <th>@lang('common.status')</th>
                        <th>@lang('common.action')</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
   </div>


</div>
<!-- END PAGE CONTENT-->

@push('footer_scripts')
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                // pageLength: 10,
                processing: true,
                serverSide: true,
                searching: false,
                ajax: "{{ route('product.trash_list') }}",
                columns: [
                    {data: 'product_id', name: 'product_id'},
                    {data : 'product_info', name: 'product_info'},
                    {data : 'pdt_name', name: 'pdt_name'},
                    {data : 'pricing', name: 'pricing'},
                    {data : 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        })
    </script>


<script>

    function filterProduct()
    {
        let item_id = $('#item_id').val();
        let cat_id = $('#cat_id').val();
        let brand_id = $('#brand_id').val();
        let product_name = $('#product_name').val();

        $.ajax({
            'headers' : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ url('TrashedfilterProduct') }}',

            type : 'POST',

            data : {item_id,cat_id,brand_id,product_name},

            beforeSend : function()
            {
                $('.show_data').html('Loading...');
            },

            success : function(res)
            {
                $('.show_data').html(res);
            }
        })
    }

    function getproduct()
    {
        $('#example-table').DataTable({
                // pageLength: 10,
                processing: true,
                serverSide: true,
                ajax: "{{ route('product.trash_list') }}",
                columns: [
                    {data: 'product_id', name: 'product_id'},
                    {data : 'product_info', name: 'product_info'},
                    {data : 'pdt_name', name: 'pdt_name'},
                    {data : 'pricing', name: 'pricing'},
                    {data : 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
    }
</script>

<script>

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

    function changeProductStatus(id)
    {
        // alert(id);
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ route('product.status') }}',

            type : 'POST',

            data : {id},

            success : function(res)
            {

            }
        })
    }
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>
@endpush

@endsection
