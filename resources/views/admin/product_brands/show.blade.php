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
    @lang('product_brands.brand')
    @endslot
    @slot('link_two_url')
    {{route('product_brands.index')}}
    @endslot


    <!-- Active Link -->
    @slot('active_link')
    @lang('product_brands.details')
    @endslot

    <!-- Page Title -->
    @slot('page_title')
    @lang('product_brands.details')
    @endslot




    @endcomponent

    <div class="card">
        <div class="card-body">
            <h4>
                @if(config('app.locale') == 'en')
                {{ $data['data']->brand_name ?: $data['data']->brand_name_bn }}
                @else
                {{ $data['data']->brand_name_bn ?: $data['data']->brand_name }}
                @endif
            </h4>
            @php
                $explode = explode(' ',$data['data']->created_at);
            @endphp
            <span>@lang('common.create_by') : </span> {{ \App\Helpers\AuthHelper::GetUserName($data['data']->create_by) }} | {{ \App\Traits\Date::getDateWithMonth('-',$explode[0]) }}, {{ date('h:i:s a', strtotime($explode[1])) }}
            <hr>
            @include('admin.layouts.histories')

        </div>
    </div>


@push('footer_script')
<script>
    $(".myTable").DataTable({
        order: [[0, 'desc']]
    });
</script>

@endpush



@endsection