@extends('stores.layouts.master')
@section('body')
<!-- START PAGE CONTENT-->
<div class="page-heading">
   @component('components.store_breadcrumb')

    @slot('page_title')
    @lang('unit.edit')
    @endslot


    @if(Auth::user()->can('Unit view'))
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
    {{route('unit.index')}}
    @endslot

    @endif

   @endcomponent
</div>
<div class="page-content fade-in-up">

   <div class="card">
    <div class="card-header">
        <b>@lang('unit.edit')</b>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('unit.update',$data['data']->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6">
                    <label for="unit_name">@lang('unit.unit_name')</label><span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-sm @error('unit_name') is-invalid @enderror" id="unit_name" name="unit_name" value="{{ $data['data']->unit_name }}">
                    @error('unit_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <label for="unit_name_bn">@lang('unit.unit_name_bn')</label><span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-sm @error('unit_name_bn') is-invalid @enderror" id="unit_name_bn" name="unit_name_bn"  value="{{ $data['data']->unit_name_bn }}">
                    @error('unit_name_bn')
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
