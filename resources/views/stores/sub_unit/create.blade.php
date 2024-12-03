@extends('stores.layouts.master')
@section('body')
<!-- START PAGE CONTENT-->
<div class="page-heading">
   @component('components.store_breadcrumb')

    @slot('page_title')
    @lang('sub_unit.add')
    @endslot


    @if(Auth::user()->can('Sub Unit view'))
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
    {{route('sub_unit.index')}}
    @endslot

    @endif

   @endcomponent
</div>
<div class="page-content fade-in-up">

   <div class="card">
    <div class="card-header">
        <b>@lang('sub_unit.add')</b>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('sub_unit.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6">
                    <label for="unit_id">@lang('sub_unit.select_unit')</label><span class="text-danger">*</span>
                    <select class="form-control form-control-sm js-example-basic-single" name="unit_id" id="unit_id">
                        <option value="">@lang('common.select_one')</option>
                        @if(isset($data['unit']))
                        @foreach ($data['unit'] as $i)
                        <option value="{{ $i->id }}">
                            @if(config('app.locale') == 'en')
                            {{ $i->unit_name ?: $i->unit_name_bn }}
                            @elseif(config('app.loale') == 'bn')
                            {{ $i->unit_name_bn ?: $i->unit_name }}
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
                    <label for="sub_unit_name">@lang('sub_unit.sub_unit_name')</label><span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-sm @error('sub_unit_name') is-invalid @enderror" id="sub_unit_name" name="sub_unit_name" value="{{ old('sub_unit_name') }}">
                    @error('sub_unit_name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <label for="sub_unit_name_bn">@lang('sub_unit.sub_unit_name_bn')</label>
                    <input type="text" class="form-control form-control-sm @error('sub_unit_name_bn') is-invalid @enderror" id="sub_unit_name_bn" name="sub_unit_name_bn" value="{{ old('sub_unit_name_bn') }}">
                    @error('sub_unit_name_bn')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 col-6 mt-2">
                    <label for="sub_unit_data">@lang('sub_unit.sub_unit_data')</label><span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-sm @error('sub_unit_data') is-invalid @enderror" id="sub_unit_data" name="sub_unit_data" value="{{ old('sub_unit_data') }}">
                    @error('sub_unit_data')
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
