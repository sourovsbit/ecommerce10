@extends('stores.layouts.master')
@section('body')
<!-- START PAGE CONTENT-->
<div class="page-heading">
   @component('components.store_breadcrumb')

    @slot('page_title')
    @lang('supplier_area.edit_title')
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
    {{route('supplier_area.index')}}
    @endslot

    @endif

   @endcomponent
</div>
<div class="page-content fade-in-up">

   <div class="card">
    <div class="card-header">
        <b>@lang('supplier_area.edit_title')</b>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('supplier_area.update',$data['data']->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6">
                    <label for="area_name">@lang('supplier_area.area_name')</label><span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-sm @error('area_name') is-invalid @enderror" id="area_name" name="area_name" value="{{ $data['data']->area_name }}">
                    @error('area_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 text-right">
                    <button class="btn btn-info btn-sm"><i class="fa fa-save"></i> @lang('common.submit')</button>
                </div>
            </div>
        </form>
    </div>
   </div>


</div>
<!-- END PAGE CONTENT-->

@endsection
