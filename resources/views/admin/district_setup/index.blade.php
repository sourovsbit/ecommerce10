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
    @lang('district_setup.district_setup')
    @endslot
    @slot('link_two_url')
    {{route('district_setup.index')}}
    @endslot


    <!-- Active Link -->
    @slot('active_link')
    @lang('district_setup.index_title')
    @endslot

    <!-- Page Title -->
    @slot('page_title')
    @lang('district_setup.index_title')
    @endslot


    @if(Auth::user()->can('Division Setup create'))
    <!-- button one -->
    @slot('button_one_name')
    @lang('common.create')
    @endslot

    @slot('button_one_route')
    {{route('district_setup.create')}}
    @endslot

    @slot('button_one_class')
    btn btn-sm btn-outline-primary
    @endslot

    @slot('button_one_icon')
    <i class="fa fa-plus"></i>
    @endslot

    @endif


    @if(Auth::user()->can('Division Setup trash'))
    <!-- button two -->
    @slot('button_two_name')
    @lang('common.trash_list')
    @endslot

    @slot('button_two_route')
    {{route('district_setup.trash_list')}}
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
                            <th>@lang('common.sl')</th>
                            <th>@lang('district_setup.country')</th>
                            <th>@lang('district_setup.division')</th>
                            <th>@lang('district_setup.district_name')</th>
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


@push('footer_script')
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Datatables Responsive
    $(".myTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('district_setup.index') }}",
        columns: [
            {data: 'serial', name: 'serial'},
            {data: 'sl', name: 'sl'},
            {data : 'country_name', name: 'country_name'},
            {data : 'division_name', name: 'division_name'},
            {data : 'district_name', name: 'district_name'},
            {data : 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});
</script>


<script>
    function changeDistrictSetupStatus(id)
    {
        // alert(id);
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ route('district_setup.status') }}',

            type : 'POST',

            data : {id},

            success : function(res)
            {

            }
        })
    }
</script>


@endpush



  @endsection
