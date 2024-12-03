<table class="table" id="example-table">
    <thead>
        <tr>
            <th>@lang('common.sl')</th>
            <th>@lang('supplier.area_name')</th>
            <th>@lang('supplier.supplier_name')</th>
            <th>@lang('supplier.phone')</th>
            <th>@lang('common.status')</th>
            <th>@lang('common.action')</th>
        </tr>
    </thead>
    @php
        $i = 1;
    @endphp
    <tbody>
        @if(isset($data))
        @foreach ($data as $d)
        <tr>
            <td>{{ $i++ }}</td>
            <td>
                {{ $d->area->area_name }}
            </td>
            <td>
                @if(config('app.locale') == 'en')
                {{ $d->supplier_name ?: $d->supplier_name_bn }}
                @else
                {{ $d->supplier_name_bn ?: $d->supplier_name }}
                @endif
            </td>
            <td>
                {{ $d->phone }}
            </td>
            <td>
                @if(Auth::user()->can('Supplier Info status'))
                    @php
                    if($d->status == 1)
                    {
                        $checked = 'checked';
                    }
                    else
                    {
                        $checked = '';
                    }
                    @endphp
                    <div class="checkbox-wrapper-51">
                    <input onchange="return changeSuppleirStatus({{$d->id}})" id="cbx-{{$d->id}}" type="checkbox" {{$checked}}>
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
                @if(Auth::user()->can('Supplier Info show'))

                    <a style="float:left;margin-right:5px;" href="{{route('supplier.show',$d->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                @endif

                @if(Auth::user()->can('Supplier Info edit'))

                   <a style="float:left;margin-right:5px;" href="{{route('supplier.edit',$d->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                @endif


                @if(Auth::user()->can('Supplier Info destroy'))

                   <form id="" method="post" action="{{route('supplier.destroy',$d->id)}}">
                    @csrf()
                    @method('DELETE')
                    <button onclick="return Sure()" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                @endif

            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
