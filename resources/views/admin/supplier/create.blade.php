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
    @lang('supplier.create_title')
    @endslot

    <!-- Page Title -->
    @slot('page_title')
    @lang('supplier.create_title')
    @endslot


    @if(Auth::user()->can('Supplier Info view'))
    <!-- button one -->
    @slot('button_one_name')
    @lang('common.view')
    @endslot

    @slot('button_one_route')
    {{route('supplier_info.index')}}
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

            <form method="post" action="{{route('supplier_info.store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="sl">@lang('common.sl')</label><span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <input type="number" class="form-control form-control-sm @error('sl') is-invalid @enderror" name="sl" id="sl"  value="{{ old('sl') }}">
                            @error('sl')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="supplier_name">@lang('supplier.supplier_name')</label><span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <input type="text" class="form-control form-control-sm @error('supplier_name') is-invalid @enderror" name="supplier_name" id="supplier_name"  value="{{ old('supplier_name') }}">
                            @error('supplier_name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="phone_number">@lang('supplier.phone_number')</label><span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <input type="text" class="form-control form-control-sm @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number"  value="{{ old('phone_number') }}" maxlength="11" autocomplete="off">
                            @error('phone_number')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="company_name">@lang('supplier.company_name')</label><span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <input type="text" class="form-control form-control-sm @error('company_name') is-invalid @enderror" name="company_name" id="company_name"  value="{{ old('company_name') }}"  autocomplete="off">
                            @error('company_name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="company_phone">@lang('supplier.company_phone')</label>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <input type="text" class="form-control form-control-sm @error('company_phone') is-invalid @enderror" name="company_phone" id="company_phone"  value="{{ old('company_phone') }}" maxlength="11" autocomplete="off">
                            @error('company_phone')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="nid">@lang('supplier.nid')</label>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <input type="text" class="form-control form-control-sm @error('nid') is-invalid @enderror" name="nid" id="nid"  value="{{ old('nid') }}" autocomplete="off">
                            @error('nid')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="image">@lang('supplier.image')</label>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <input type="file" class="form-control form-control-sm @error('image') is-invalid @enderror" name="image" id="image"  value="{{ old('image') }}" autocomplete="off">
                            @error('image')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="banner">@lang('supplier.banner')</label>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <input type="file" class="form-control form-control-sm @error('banner') is-invalid @enderror" name="banner" id="banner"  value="{{ old('banner') }}" autocomplete="off">
                            @error('banner')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="text-right mt-2">
                            <button class="btn btn-sm btn-success"><i class="fa fa-save"></i> @lang('common.submit')</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection
