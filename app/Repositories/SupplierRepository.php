<?php
namespace App\Repositories;
use App\Interfaces\SupplierInterface;
use App\Models\ActivityLog;
use App\Models\History;
use Auth;
use Session;
use App\Traits\ViewDirective;
use Yajra\DataTables\Facades\DataTables;
use App\Models\SupplierArea;
use App\Models\Supplier;

class SupplierRepository implements SupplierInterface{
    protected $path,$sl;
    use ViewDirective;
    public function __construct()
    {
        $this->path = 'stores.supplier';
    }
    public function index($datatable)
    {
        $data['supplier_area'] = SupplierArea::where('store_id',Session::get('store_id'))->where('status',1)->get();
        if($datatable == 1)
        {
            $data = Supplier::where(function($query){
                $query->where('store_id',Session::get('store_id'));
            });
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('area_name',function($row){
                return $row->area->area_name;
            })
            ->addColumn('supplier_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->supplier_name ?: $row->supplier_name_bn;
                }
                else
                {
                    return $row->supplier_name_bn ?: $row->supplier_name;
                }
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Supplier Info status'))
                {
                    if($row->status == 1)
                    {
                        $checked = 'checked';
                    }
                    else
                    {
                        $checked = 'false';
                    }
                    return '<div class="checkbox-wrapper-51">
                    <input onchange="return changeSuppleirStatus('.$row->id.')" id="cbx-'.$row->id.'" type="checkbox" '.$checked.'>
                    <label class="toggle" for="cbx-'.$row->id.'">
                      <span>
                        <svg viewBox="0 0 10 10" height="10px" width="10px">
                          <path d="M5,1 L5,1 C2.790861,1 1,2.790861 1,5 L1,5 C1,7.209139 2.790861,9 5,9 L5,9 C7.209139,9 9,7.209139 9,5 L9,5 C9,2.790861 7.209139,1 5,1 L5,9 L5,1 Z"></path>
                        </svg>
                      </span>
                    </label>
                  </div>';
                }
                else
                {
                    return '';
                }
            })
            ->addColumn('action', function($row){
                if(Auth::user()->can('Supplier Info show'))
                {
                    $show_btn = '<a style="float:left;margin-right:5px;" href="'.route('supplier.show',$row->id).'" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>';
                }
                else
                {
                    $show_btn = '';
                }

                if(Auth::user()->can('Supplier Info edit'))
                {
                    $edit_btn = '<a style="float:left;margin-right:5px;" href="'.route('supplier.edit',$row->id).'" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Supplier Info destroy'))
                {
                    $delete_btn = '<form id="" method="post" action="'.route('supplier.destroy',$row->id).'">
                    '.csrf_field().'
                    '.method_field('DELETE').'
                    <button onclick="return Sure()" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>';
                }
                else
                {
                    $delete_btn ='';
                }



                $return_btn = $show_btn.''.$edit_btn.''.$delete_btn;

                return $return_btn;
            })
            ->rawColumns(['action','area_name','supplier_name','sl','status'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'index',$data);
    }

    public function create()
    {
        return ViewDirective::view($this->path,'create');
    }

    public function store($request)
    {

        // return $data;
        // dd($request->all());

        try {

            $checkArea = SupplierArea::where('area_name',$request->area_id)->first();
            if(!isset($checkArea))
            {
                $area_data = array(
                    'area_name' => $request->area_id,
                    'status' => 1,
                    'store_id' => Session::get('store_id'),
                );

                SupplierArea::create($area_data);
                ActivityLog::create([
                    'date' => date('Y-m-d'),
                    'time' => date('H:i:s'),
                    'user_id' => Auth::user()->id,
                    'slug' => 'create',
                    'description' => 'Create Supplier Area which name is '.$request->area_id,
                    'description_bn' => 'একটি সাপ্লাইয়ার এরিয়া তৈরি করেছেন যার নাম '.$request->area_id,
                ]);

                $new_area = SupplierArea::where('area_name',$request->area_id)->first();
                $area_id = $new_area->id;
            }
            else
            {
                $area_id = $checkArea->id;
            }

            $data = array(
                'area_id' => $area_id,
                'supplier_name' => $request->supplier_name,
                'supplier_name_bn' => $request->supplier_name_bn,
                'phone' => $request->phone,
                'adress' => $request->adress,
                'status' => 1,
                'store_id' => Session::get('store_id'),
            );
            Supplier::create($data);
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'create',
                'description' => 'Create Supplier which name is '.$request->supplier_name,
                'description_bn' => 'একটি সাপ্লাইয়ার তৈরি করেছেন যার নাম '.$request->supplier_name,
            ]);
            toastr()->success(__('supplier.create_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function show($id)
    {
        $data['data'] = Supplier::find($id);
        $data['histories'] = History::where('tag','supplier')->get();
        return ViewDirective::view($this->path,'show',$data);
    }

    public function properties($id){

    }

    public function edit($id){

    }

    public function update($request, $id){

    }

    public function destroy($id){

    }

    public function trash_list($datatable){

    }

    public function restore($id){

    }

    public function delete($id){

    }

    public function print(){

    }

    public function status($id)
    {
        $check = Supplier::withTrashed()->where('id',$id)->first();

        if($check->status == 0)
        {
            $check->update([
                'status' => '1',
            ]);
        }
        else
        {
            $check->update([
                'status' => '0',
            ]);
        }

        ActivityLog::create([
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'user_id' => Auth::user()->id,
            'slug' => 'status',
            'description' => 'Change Status of Supplier which name is '.$check->supplier_name,
            'description_bn' => 'একটি সাপ্লইয়ার এর স্ট্যাটাস পরিবর্তন করেছেন যার নাম '.$check->supplier_name,
        ]);
        History::create([
            'tag' => 'supplier',
            'fk_id' => $id,
            'type' => 'status',
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'user_id' => Auth::user()->id,
        ]);

        return 1;
    }
}
