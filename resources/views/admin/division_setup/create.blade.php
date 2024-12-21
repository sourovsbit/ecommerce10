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
    @lang('division_setup.division_setup')
    @endslot
    @slot('link_two_url')
    {{route('division_setup.index')}}
    @endslot


    <!-- Active Link -->
    @slot('active_link')
    @lang('division_setup.create_title')
    @endslot

    <!-- Page Title -->
    @slot('page_title')
    @lang('division_setup.create_title')
    @endslot


    @if(Auth::user()->can('Division Setup view'))
    <!-- button one -->
    @slot('button_one_name')
    @lang('common.view')
    @endslot

    @slot('button_one_route')
    {{route('division_setup.index')}}
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

            <form method="post" action="{{route('division_setup.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('common.sl')</label><span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-sm @error('sl') is-invalid @enderror" name="sl" id="sl"  value="{{ old('sl') }}">
                        @error('sl')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('vendor.select_country')</label><span class="text-danger">*</span>
                        <div class="showlabels">
                            <select class="form-select form-select-sm select2 @error('country_id') is-invalid @enderror" name="country_id" id="country_id">
                                <option value="">@lang('common.select_one')</option>
                                @if(isset($data['country']))
                                @foreach ($data['country'] as $country)
                                <option @if(old('country_id') == $country->id) selected @endif value="{{ $country->id }}">
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
                        <label>@lang('division_setup.division_name')</label><span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-sm @error('division_name') is-invalid @enderror" name="division_name" id="division_name"  value="{{ old('division_name') }}">
                        @error('division_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('division_setup.division_name_bn')</label>
                        <input type="text" class="form-control form-control-sm @error('division_name_bn') is-invalid @enderror" name="division_name_bn" id="division_name_bn"  value="{{ old('division_name_bn') }}">
                        @error('division_name_bn')
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
