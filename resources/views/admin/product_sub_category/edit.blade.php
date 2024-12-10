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
    @lang('product_sub_category.category')
    @endslot
    @slot('link_two_url')
    {{route('product_sub_category.index')}}
    @endslot


    <!-- Active Link -->
    @slot('active_link')
    @lang('product_sub_category.edit_title')
    @endslot

    <!-- Page Title -->
    @slot('page_title')
    @lang('product_sub_category.edit_title')
    @endslot


    @if(Auth::user()->can('Product Sub Category view'))
    <!-- button one -->
    @slot('button_one_name')
    @lang('common.view')
    @endslot

    @slot('button_one_route')
    {{route('product_sub_category.index')}}
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

            <form method="post" action="{{route('product_sub_category.update',$data['data']->id)}}" enctype="multipart/form-data">
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
                        <label>@lang('product_sub_category.select_item')</label><span class="text-danger">*</span>
                        <div class="showlabels">
                            <select class="form-select form-select-sm select2 @error('item_id') is-invalid @enderror" name="item_id" id="item_id">
                                <option value="">@lang('common.select_one')</option>
                                @if(isset($data['item']))
                                @foreach ($data['item'] as $item)
                                <option @if($data['data']->item_id == $item->id) selected @endif value="{{ $item->id }}">
                                    @if(config('app.locale') == 'en')
                                    {{ $item->item_name ?: $item->item_name_bn }}
                                    @else
                                    {{ $item->item_name_bn ?: $item->item_name }}
                                    @endif
                                </option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        @error('item_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('product_sub_category.select_category')</label><span class="text-danger">*</span>
                        <div class="showlabels">
                            <select class="form-select form-select-sm select2 @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                <option value="">@lang('common.select_one')</option>
                                @if(isset($data['category']))
                                @foreach ($data['category'] as $category)
                                <option @if($data['data']->category_id == $category->id) selected @endif value="{{ $category->id }}">
                                    @if(config('app.locale') == 'en')
                                    {{ $category->category_name ?: $category->category_name_bn }}
                                    @else
                                    {{ $category->category_name_bn ?: $category->category_name }}
                                    @endif
                                </option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        @error('category_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('product_sub_category.sub_category_name')</label><span class="text-danger">*</span>
                        <input type="text" class="form-control form-control-sm @error('sub_category_name') is-invalid @enderror" name="sub_category_name" id="sub_category_name"  value="{{ $data['data']->sub_category_name }}">
                        @error('sub_category_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('product_sub_category.sub_category_name_bn')</label>
                        <input type="text" class="form-control form-control-sm @error('sub_category_name_bn') is-invalid @enderror" name="sub_category_name_bn" id="sub_category_name_bn"  value="{{ $data['data']->sub_category_name_bn }}">
                        @error('sub_category_name_bn')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('common.image')</label>
                        <input type="file" class="form-control form-control-sm @error('image') is-invalid @enderror" name="image" id="image">
                        @error('image')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <br>
                        @php
                            $pathImage = public_path().'/backend/ProductSubCategory/ProductSubCategoryImage/'.$data['data']->image;
                        @endphp
                        @if(file_exists($pathImage))
                            <img src="{{ asset('backend/ProductSubCategory/ProductSubCategoryImage') }}/{{ $data['data']->image }}" alt="" class="img-fluid" style="height: 70px;">
                        @endif
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mt-2">
                        <label>@lang('common.banner')</label>
                        <input type="file" class="form-control form-control-sm @error('banner') is-invalid @enderror" name="banner" id="banner">
                        @error('banner')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <br>
                        @php
                            $pathBanner = public_path().'/backend/ProductSubCategory/ProductSubCategoryBanner/'.$data['data']->banner;
                        @endphp
                        @if(file_exists($pathBanner))
                            <img src="{{ asset('backend/ProductSubCategory/ProductSubCategoryBanner') }}/{{ $data['data']->banner }}" alt="" class="img-fluid" style="height: 70px;">
                        @endif
                    </div>

                </div>

                <div class="text-right mt-2" style="text-align: right;">
                    <button class="btn btn-sm btn-success"><i class="fa fa-save"></i> @lang('common.submit')</button>
                </div>

            </form>
        </div>
    </div>
@endsection