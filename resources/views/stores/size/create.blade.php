@extends('stores.layouts.master')
@section('body')
<!-- START PAGE CONTENT-->
<div class="page-heading">
   @component('components.store_breadcrumb')

    @slot('page_title')
    @lang('size.add')
    @endslot


    @if(Auth::user()->can('Size view'))
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
    {{route('size.index')}}
    @endslot

    @endif

   @endcomponent
</div>
<div class="page-content fade-in-up">

   <div class="card">
    <div class="card-header">
        <b>@lang('size.add')</b>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('size.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6">
                    <label for="size_name">@lang('size.size_name')</label><span class="text-danger">*</span>
                    <input type="text" class="form-control form-control-sm @error('size_name') is-invalid @enderror" id="size_name" name="size_name" value="{{ old('size_name') }}">
                    @error('size_name')
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
