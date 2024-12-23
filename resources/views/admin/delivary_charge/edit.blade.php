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
    @lang('delivary_charge.delivary_charge')
    @endslot
    @slot('link_two_url')
    {{route('delivary_charge.index')}}
    @endslot


    <!-- Active Link -->
    @slot('active_link')
    @lang('delivary_charge.edit_title')
    @endslot

    <!-- Page Title -->
    @slot('page_title')
    @lang('delivary_charge.edit_title')
    @endslot


    @if(Auth::user()->can('Delivery Charge view'))
    <!-- button one -->
    @slot('button_one_name')
    @lang('common.view')
    @endslot

    @slot('button_one_route')
    {{route('delivary_charge.index')}}
    @endslot

    @slot('button_one_class')
    btn btn-sm btn-outline-primary
    @endslot

    @slot('button_one_icon')
    <i class="fa fa-eye"></i>
    @endslot

    @endif


    @endcomponent

    <div class="card">
        <div class="card-body">

            <form method="post" action="{{route('delivary_charge.update',$data['data']->id)}}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('common.sl')</label><span class="text-danger">*</span>
                        <input type="number" class="form-control form-control-sm @error('sl') is-invalid @enderror" name="sl" id="sl"  value="{{ $data['data']->sl }}">
                        @error('sl')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('delivary_charge.select_country')</label><span class="text-danger">*</span>
                        <div class="showlabels">
                            <select class="form-select form-select-sm select2 @error('country_id') is-invalid @enderror" name="country_id" id="country_id">
                                <option value="">@lang('common.select_one')</option>
                                @if(isset($data['country']))
                                @foreach ($data['country'] as $country)
                                <option @if($data['data']->country_id == $country->id) selected @endif value="{{ $country->id }}">
                                    @if(config('app.locale') == 'en')
                                    {{ $country->country_name ?: $country->country_name_bn }}
                                    @else
                                    {{ $country->country_name_bn ?: $country->country_name }}
                                    @endif
                                </option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        @error('country_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('delivary_charge.select_division')</label><span class="text-danger">*</span>
                        <div class="showlabels">
                            <select class="form-select form-select-sm select2 @error('division_id') is-invalid @enderror" name="division_id" id="division_id">
                                <option value="">@lang('common.select_one')</option>
                                @if(isset($data['division']))
                                @foreach ($data['division'] as $division)
                                <option @if($data['data']->division_id == $division->id) selected @endif value="{{ $division->id }}">
                                    @if(config('app.locale') == 'en')
                                    {{ $division->division_name ?: $division->division_name_bn }}
                                    @else
                                    {{ $division->division_name_bn ?: $division->division_name }}
                                    @endif
                                </option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        @error('division_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('delivary_charge.select_shipping')</label><span class="text-danger">*</span>
                        <div class="showlabels">
                            <select class="form-select form-select-sm select2 @error('shipping_class_id') is-invalid @enderror" name="shipping_class_id" id="shipping_class_id">
                                <option value="">@lang('common.select_one')</option>
                                @if(isset($data['shipping']))
                                @foreach ($data['shipping'] as $shipping)
                                <option @if($data['data']->shipping_class_id == $shipping->id) selected @endif value="{{ $shipping->id }}">
                                    @if(config('app.locale') == 'en')
                                    {{ $shipping->shipping_name ?: $shipping->shipping_name_bn }}
                                    @else
                                    {{ $shipping->shipping_name_bn ?: $shipping->shipping_name }}
                                    @endif
                                </option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        @error('shipping_class_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('delivary_charge.charge_amount')</label><span class="text-danger">*</span>
                        <input type="number" class="form-control form-control-sm @error('charge_amount') is-invalid @enderror" name="charge_amount" id="charge_amount"  value="{{ $data['data']->charge_amount }}">
                        @error('charge_amount')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="text-right mt-2" style="text-align: right;">
                    <button class="btn btn-sm btn-success"><i class="fa fa-save"></i> @lang('common.submit')</button>
                </div>

            </form>
        </div>
    </div>
@endsection
