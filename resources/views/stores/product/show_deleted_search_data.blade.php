<table class="table" id="example-table">
    <thead>
        <tr>
            <th>@lang('product.product_id')</th>
            <th>@lang('product.product_info')</th>
            <th>@lang('product.product_name')</th>
            <th>@lang('product.pricing')</th>
            <th>@lang('common.status')</th>
            <th>@lang('common.action')</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @if(isset($data))
        @foreach ($data as $d)
        <td>
            {{ $d->product_id }}
        </td>
        <td>
            @php
            if(config('app.locale') == 'en')
                {
                    $item_name = $d->item->item_name ?: $d->item->item_name_bn;
                    $cat_name = $d->category->category_name ?: $d->category->category_name_bn;
                    $brand_name = $d->brand->brand_name ?: $d->brand->brand_name_bn;
                    $unit_name = $d->unit->unit_name ?: $d->uinit->unit_name_bn;
                }
                else
                {
                    $item_name = $d->item->item_name_bn ?: $d->item->item_name;
                    $cat_name = $d->category->category_name_bn ?: $d->category->category_name;
                    $brand_name = $d->brand->brand_name_bn ?: $d->brand->brand_name;
                    $unit_name = $d->unit->unit_name_bn ?: $d->uinit->unit_name;
                }

                @endphp

                @lang('product_item.item_name') : {{$item_name}}<br>
                @lang('category.category_name') : {{$cat_name}}<br>
                @lang('brand.brand_name') : {{$brand_name}}<br>
                @lang('unit.unit_name') : {{$unit_name}}<br>';
        </td>
        <td>
            @php
            if($d->type == 1)
            {
                $type = __('product.simple');
            }
            else
            {
                $type = __('product.variable');
            }
            @endphp

            @if(config('app.locale') == 'en')

            {{$d->product_name}}({{$type}})

            @else

            {{$d->product_name_bn}}({{$type}})
            @endif

            @if($d->type == 2)
                @php
                $colors = App\Models\ProductColorInfo::where('product_id',$d->product_id)->get();
                $sizes = App\Models\ProductSizeInfo::where('product_id',$d->product_id)->get();
                @endphp
                @if(count($colors) > 0)
                    <hr>
                    <b>@lang('product.color') :</b>
                    @foreach($colors as $c)
                        @php
                        if(config('locale') == 'en')
                        {
                            $color_name  = $c->color->color_name ?: $c->color->color_name_bn;
                        }
                        else
                        {
                            $color_name = $c->color_name_bn ?: $c->color->color_name;
                        }
                        @endphp
                        {{$color_name}} ,
                    @endforeach
                  <br>
                @endif
                @if(count($sizes) > 0)

                    <b>@lang('product.sizes') :</b>
                    @foreach($sizes as $s)

                    {{$s->size->size_name}},
                    @endforeach
                @endif
            @endif
        </td>
        <td>
            @lang('product.purchase_price') : {{$d->purchase_price}} /-<br>
                @lang('product.sale_price') :{{$d->sale_price}} /-
        </td>
        <td>

            @if(Auth::user()->can('Product Add status'))
                @php
                if($d->status == 1)
                {
                    $checked = 'checked';
                }
                else
                {
                    $checked = 'false';
                }
                @endphp
                <div class="checkbox-wrapper-51">
                <input onchange="return changeProductStatus({{$d->id}})" id="cbx-{{$d->id}}" type="checkbox" {{$checked}}>
                <label class="toggle" for="cbx-{{$d->id}}">
                    <span>
                    <svg viewBox="0 0 10 10" height="10px" width="10px">
                        <path d="M5,1 L5,1 C2.790861,1 1,2.790861 1,5 L1,5 C1,7.209139 2.790861,9 5,9 L5,9 C7.209139,9 9,7.209139 9,5 L9,5 C9,2.790861 7.209139,1 5,1 L5,9 L5,1 Z"></path>
                    </svg>
                    </span>
                </label>
                </div>

            @endif
        </td>
        <td>
            @if(Auth::user()->can('Product Add restore'))

                    <a style="float:left;margin-right:5px;" href="{{route('product.restore',$d->id)}}" class="btn btn-sm btn-info"><i class="fa fa-arrow-left"></i></a>
            @endif

            @if(Auth::user()->can('Product Add delete'))

                <a onclick="return Sure();" style="float:left;margin-right:5px;" href="{{route('product.delete',$d->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            @endif

        </td>
    </tr>
        @endforeach
        @endif
    </tbody>
</table>
