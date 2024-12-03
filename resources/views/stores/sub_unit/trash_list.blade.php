@extends('stores.layouts.master')
@section('body')
<!-- START PAGE CONTENT-->
<div class="page-heading">
   @component('components.store_breadcrumb')

    @slot('page_title')
    @lang('sub_unit.trash_title')
    @endslot



    @if(Auth::user()->can('Sub Unit view'))
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
    {{route('sub_unit.index')}}
    @endslot

    @endif

   @endcomponent
</div>

<div class="page-content fade-in-up">

   <div class="card">
    <div class="card-header">
        <b>@lang('sub_unit.trash_title')</b>
    </div>
    <div class="card-body">
        <table class="table" id="example-table">
            <thead>
                <tr>
                    <th>@lang('common.sl')</th>
                    <th>@lang('unit.unit_name')</th>
                    <th>@lang('sub_unit.sub_unit_name')</th>
                    <th>@lang('sub_unit.sub_unit_data')</th>
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
<!-- END PAGE CONTENT-->

@push('footer_scripts')
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                // pageLength: 10,
                processing: true,
                serverSide: true,
                ajax: "{{ route('sub_unit.trash_list') }}",
                columns: [
                    {data: 'sl', name: 'sl'},
                    {data : 'unit_name', name: 'unit_name'},
                    {data : 'sub_unit_name', name: 'sub_unit_name'},
                    {data : 'sub_unit_data', name: 'sub_unit_data'},
                    {data : 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        })
    </script>

<script>
    function changeSubUnitStatus(id)
    {
        // alert(id);
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ route('sub_unit.status') }}',

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
