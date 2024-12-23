@extends('admin.layouts.master')
@section('body')
<div class="content">

    @component('components.breadcrumb')
    <!-- link 1 -->
    @slot('link_one')
    @lang('common.dashboard')
    @endslot
    @slot('link_one_url')
    {{route('admin.view')}}
    @endslot


    <!-- link 2 -->
    @slot('link_two')
    @lang('supplier.supplier')
    @endslot
    @slot('link_two_url')
    {{route('supplier_info.index')}}
    @endslot


    <!-- Active Link -->
    @slot('active_link')
    @lang('supplier.index_title')
    @endslot

    <!-- Page Title -->
    @slot('page_title')
    @lang('supplier.index_title')
    @endslot


    @if(Auth::user()->can('Supplier Info create'))
    <!-- button one -->
    @slot('button_one_name')
    @lang('common.create')
    @endslot

    @slot('button_one_route')
    {{route('supplier_info.create')}}
    @endslot

    @slot('button_one_class')
    btn btn-sm btn-outline-primary
    @endslot

    @slot('button_one_icon')
    <i class="fa fa-plus"></i>
    @endslot

    @endif


    @if(Auth::user()->can('Supplier Info trash'))
    <!-- button two -->
    @slot('button_two_name')
    @lang('common.trash_list')
    @endslot

    @slot('button_two_route')
    {{route('product_sub_category.trash_list')}}
    @endslot

    @slot('button_two_class')
    btn btn-sm btn-danger
    @endslot

    @slot('button_two_icon')
    <i class="fa fa-eye"></i>
    @endslot

    @endif


    @endcomponent

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 mt-2">
                    <input type="text" class="form-control form-control-sm" name="supplier_id" id="supplier_id" placeholder="@lang('supplier.supplier_id_search')">
                </div>
                <div class="col-lg-3 col-md-3 col-12 mt-2">
                    <input type="text" class="form-control form-control-sm" name="supplier_name" id="supplier_name" placeholder="@lang('supplier.supplier_name_search')">
                </div>
                <div class="col-lg-3 col-md-3 col-12 mt-2">
                    <input type="text" class="form-control form-control-sm" name="supplier_phone" id="supplier_phone" placeholder="@lang('supplier.supplier_phone_search')">
                </div>
                <div class="col-lg-3 col-md-3 col-12 mt-2">
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" placeholder="@lang('supplier.company_name_search')">
                </div>
                <div class="col-lg-3 col-md-3 col-12 mt-2">
                    <button class="btn btn-sm btn-info"><i class="fa fa-filter"></i> @lang('common.filter')</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-2">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table myTable  fs--1 mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('supplier.supplier_id')</th>
                            <th>@lang('supplier.supplier_name')</th>
                            <th>@lang('supplier.phone_number')</th>
                            <th>@lang('supplier.company_name')</th>
                            <th>@lang('supplier.company_phone')</th>
                            <th>@lang('common.status')</th>
                            <th>@lang('common.action')</th>
                        </tr>
                    </thead>
                    <tbody id="showData">
                        @forelse ($data['data'] as $v)
                        <tr>
                            <td>{{ $data['sl']++ }}</td>
                            <td>{{ $v->supplier_id }}</td>
                            <td>{{ $v->supplier_name }}</td>
                            <td>{{ $v->phone_number }}</td>
                            <td>{{ $v->company_name }}</td>
                            <td>{{ $v->company_phone }}</td>
                            <td>
                                @if(Auth::user()->can('Supplier Info status'))
                                <div class="checkbox-wrapper-51">
                                    <input onchange="return changeVendorStatus({{$v->id}})" id="cbx-51-{{$v->id}}" type="checkbox" @if($v->status == 1) checked @endif>
                                    <label class="toggle" for="cbx-51-{{$v->id}}">
                                    <span>
                                        <svg viewBox="0 0 10 10" height="10px" width="10px">
                                        <path d="M5,1 L5,1 C2.790861,1 1,2.790861 1,5 L1,5 C1,7.209139 2.790861,9 5,9 L5,9 C7.209139,9 9,7.209139 9,5 L9,5 C9,2.790861 7.209139,1 5,1 L5,9 L5,1 Z"></path>
                                        </svg>
                                    </span>
                                    </label>
                                </div>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown font-sans-serif">
                                    <a class="btn btn-phoenix-default dropdown-toggle" id="dropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('common.action')</a>
                                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuLink" style="">
                                        @if(Auth::user()->can('Supplier Info show'))
                                        <a class="dropdown-item" href="{{route('supplier_info.show',$v->id)}}"><i class="fa fa-eye"></i> @lang('common.show')</a>
                                        @endif

                                        @if(Auth::user()->can('Supplier Info edit'))
                                        <a class="dropdown-item" href="{{route('supplier_info.edit',$v->id)}}"><i class="fa fa-edit"></i> @lang('common.edit')</a>
                                        @endif

                                        @if(Auth::user()->can('Supplier Info destroy'))
                                        <form id="" method="post" action="{{route('supplier_info.destroy',$v->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return Sure()" type="post" class="dropdown-item text-danger"><i class="fa fa-trash"></i> @lang('common.destroy')</button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="8" class="text-danger" style="text-align: center">
                                @lang('common.no_data_found')
                            </th>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $data['data']->links() }}
            </div>
        </div>
    </div>


@push('footer_script')
<script>
    function changeSubCategoryStatus(id)
    {
        // alert(id);
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ route('product_sub_category.status') }}',

            type : 'POST',

            data : {id},

            success : function(res)
            {

            }
        })
    }
</script>

<script>
    function searchSupplier()
    {
        let supplier_id = $('#supplier_id').val();
        let supplier_name = $('#supplier_name').val();
        let supplier_phone = $('#supplier_phone').val();
        let company_name = $('#company_name').val();

        if(supplier_id != '' || supplier_name != '' || supplier_phone != '' || company_name != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ searchSupplier }}',

                type : 'POST',

                data : {supplier_id,supplier_name,supplier_phone,company_name},

                beforeSend : function()
                {

                },

                success : function(res)
                {
                    $('#showData').html(res);
                }
            });
        }
    }
</script>

@endpush


@endsection
