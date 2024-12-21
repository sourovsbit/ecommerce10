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
    @lang('shipping_class.shipping_class')
    @endslot
    @slot('link_two_url')
    {{route('shipping_class.index')}}
    @endslot


    <!-- Active Link -->
    @slot('active_link')
    @lang('shipping_class.create_title')
    @endslot

    <!-- Page Title -->
    @slot('page_title')
    @lang('shipping_class.create_title')
    @endslot


    @if(Auth::user()->can('Shipping Class view'))
    <!-- button one -->
    @slot('button_one_name')
    @lang('common.view')
    @endslot

    @slot('button_one_route')
    {{route('shipping_class.index')}}
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

            <form method="post" action="{{route('shipping_class.store')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('common.sl')</label><span class="text-danger">*</span>
                        <input type="number" class="form-control form-control-sm @error('sl') is-invalid @enderror" name="sl" id="sl"  value="{{ old('sl') }}">
                        @error('sl')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('shipping_class.shipping_name')</label><span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-sm @error('shipping_name') is-invalid @enderror" name="shipping_name" id="shipping_name"  value="{{ old('shipping_name') }}">
                        @error('shipping_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('shipping_class.shipping_name_bn')</label>
                        <input type="text" class="form-control form-control-sm @error('shipping_name_bn') is-invalid @enderror" name="shipping_name_bn" id="shipping_name_bn"  value="{{ old('shipping_name_bn') }}">
                        @error('shipping_name_bn')
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
