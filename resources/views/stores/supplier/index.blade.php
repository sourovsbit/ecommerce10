@extends('stores.layouts.master')
@section('body')
<!-- START PAGE CONTENT-->
<div class="page-heading">
   @component('components.store_breadcrumb')

    @slot('page_title')
    @lang('supplier.index_title')
    @endslot


    @if(Auth::user()->can('Supplier Info view'))
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
    {{route('supplier.create')}}
    @endslot

    @endif


    @if(Auth::user()->can('Supplier Info trash'))
    <!-- button one -->
    @slot('button_two_name')
    @lang('common.trash_list')
    @endslot

    @slot('button_two_class')
    btn btn-danger btn-sm
    @endslot

    @slot('button_two_icon')
    fa fa-eye
    @endslot

    @slot('button_two_route')
    {{route('product.trash_list')}}
    @endslot

    @endif

   @endcomponent
</div>
<div class="page-content fade-in-up">

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <label for="area_id">@lang('supplier.area_name')</label><span class="text-danger">*</span>
                    <select class="form-control form-control-sm js-example-basic-single" name="area_id" id="area_id">
                        <option value="">@lang('common.select_one')</option>
                        @if(isset($data['supplier_area']))
                        @foreach ($data['supplier_area'] as $i)
                        <option
                        @if(old('area_id') == $i->id)
                        selected
                        @endif
                        value="{{ $i->id }}">
                            {{$i->area_name}}
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

                <div class="col-lg-9 col-md-6 col-6">
                    <label for="supplier_name">@lang('supplier.supplier_name')</label>
                    <input type="text" class="form-control form-control-sm @error('supplier_name') is-invalid @enderror" id="supplier_name" name="supplier_name" value="{{ old('supplier_name') }}">
                    @error('supplier_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <button onclick="filterSupplier()" class="btn btn-info btn-sm"><i class="fa fa-filter"></i> @lang('common.filter')</button>
                <button onclick="exportSupplier()" class="btn btn-success btn-sm"><i class="fa fa-file"></i> @lang('common.export')</button>
            </div>
        </div>
    </div>

   <div class="card">
    <div class="card-header">
        <b>@lang('supplier.index_title')</b>
    </div>
    <div class="card-body">
        <div class="show_data">
            <table class="table" id="example-table">
                <thead>
                    <tr>
                        <th>@lang('common.sl')</th>
                        <th>@lang('supplier.area_name')</th>
                        <th>@lang('supplier.supplier_name')</th>
                        <th>@lang('supplier.phone')</th>
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
                ajax: "{{ route('supplier.index') }}",
                columns: [
                    {data: 'sl', name: 'sl'},
                    {data : 'area_name', name: 'area_name'},
                    {data : 'supplier_name', name: 'supplier_name'},
                    {data : 'phone', name: 'phone'},
                    {data : 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        })
    </script>

<script>
    function changeSuppleirStatus(id)
    {
        // alert(id);
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ route('supplier.status') }}',

            type : 'POST',

            data : {id},

            success : function(res)
            {

            }
        })
    }
</script>

<script>
    function filterSupplier()
    {
        let area_id = $('#area_id').val();
        let supplier_name = $('#supplier_name').val();
        if(area_id != '' || supplier_name != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ url('filterSupplier') }}',

                type : 'POST',

                data : {area_id,supplier_name},

                beforeSend : function()
                {
                    $('.loader').show();
                    $('#contentWrapper').css('opacity','0.5');
                },

                success : function(res)
                {
                    $('.loader').hide();
                    $('#contentWrapper').css('opacity','1');
                    $('.show_data').html(res);
                }
            })
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
