<?php
namespace App\Repositories;
use App\Interfaces\SupplierAreaInterface;
use App\Models\SupplierArea;
use App\Models\ActivityLog;
use App\Models\History;
use Auth;
use Session;
use App\Traits\ViewDirective;
use Yajra\DataTables\Facades\DataTables;

class SupplierAreaRepository implements SupplierAreaInterface{
    protected $path,$sl;
    use ViewDirective;
    public function __construct()
    {
        $this->path = 'stores.supplier_area';
    }
    public function index($datatable)
    {
        if($datatable == 1)
        {
            $data = SupplierArea::where('store_id',Session::get('store_id'))->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('area_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->area_name;
                }
                else
                {
                    return $row->area_name;
                }
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Supplier Area status'))
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
                    <input onchange="return changeSupplierAreaStatus('.$row->id.')" id="cbx-'.$row->id.'" type="checkbox" '.$checked.'>
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
                if(Auth::user()->can('Supplier Area show'))
                {
                    $show_btn = '<a style="float:left;margin-right:5px;" href="'.route('supplier_area.show',$row->id).'" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>';
                }
                else
                {
                    $show_btn = '';
                }

                if(Auth::user()->can('Supplier Area edit'))
                {
                    $edit_btn = '<a style="float:left;margin-right:5px;" href="'.route('supplier_area.edit',$row->id).'" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Supplier Area destroy'))
                {
                    $delete_btn = '<form id="" method="post" action="'.route('supplier_area.destroy',$row->id).'">
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
            ->rawColumns(['action','area_name','sl','status'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'index');
    }

    public function create()
    {
        return ViewDirective::view($this->path,'create');
    }

    public function store($request)
    {
        $data = array(
            'area_name' => $request->area_name,
            'status' => 1,
            'store_id' => Session::get('store_id'),
        );

        // return $data;

        try {
            SupplierArea::create($data);
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'create',
                'description' => 'Create Supplier Area which name is '.$request->area_name,
                'description_bn' => 'একটি সাপ্লাইয়ার এরিয়া তৈরি করেছেন যার নাম '.$request->area_name,
            ]);
            toastr()->success(__('supplier_area.create_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function show($id)
    {
        $data['data'] = SupplierArea::find($id);
        $data['histories'] = History::where('tag','supplier_area')->get();
        return ViewDirective::view($this->path,'show',$data);
    }

    public function properties($id){

    }

    public function edit($id)
    {
        $data['data'] = SupplierArea::find($id);
        return ViewDirective::view($this->path,'edit',$data);
    }

    public function update($request, $id)
    {
        $data = array(
            'area_name' => $request->area_name,
        );

        try {
            SupplierArea::find($id)->update($data);
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'update',
                'description' => 'Update Supplier Area which name is '.$request->area_name,
                'description_bn' => 'একটি সাপ্লাইয়ার এরিয়া সম্পাদন করেছেন যার নাম '.$request->area_name,
            ]);
            History::create([
                'tag' => 'supplier_area',
                'fk_id' => $id,
                'type' => 'update',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('supplier_area.update_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            SupplierArea::find($id)->delete();
            $data = SupplierArea::withTrashed()->where('id',$id)->first();
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'destroy',
                'description' => 'Delete Supplier Area which name is '.$data->area_name,
                'description_bn' => 'একটি সাইজ ডিলেট করেছেন যার নাম '.$data->area_name,
            ]);
            History::create([
                'tag' => 'supplier_area',
                'fk_id' => $id,
                'type' => 'destroy',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('supplier_area.delete_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function trash_list($datatable)
    {
        if($datatable == 1)
        {
            $data = SupplierArea::onlyTrashed()->where('store_id',Session::get('store_id'))->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('area_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->area_name;
                }
                else
                {
                    return $row->area_name;
                }
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Size status'))
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
                    <input onchange="return changeSupplierAreaStatus('.$row->id.')" id="cbx-'.$row->id.'" type="checkbox" '.$checked.'>
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
                if(Auth::user()->can('Supplier Area restore'))
                {
                    $edit_btn = '<a style="float:left;margin-right:5px;" href="'.route('supplier_area.restore',$row->id).'" class="btn btn-sm btn-info"><i class="fa fa-arrow-left"></i></a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Supplier Area delete'))
                {
                    $delete_btn = '<a onclick="return Sure();" style="float:left;margin-right:5px;" href="'.route('supplier_area.delete',$row->id).'" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>';
                }
                else
                {
                    $delete_btn ='';
                }



                $return_btn = $edit_btn.''.$delete_btn;

                return $return_btn;
            })
            ->rawColumns(['action','area_name','sl','status'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'trash_list');
    }

    public function restore($id)
    {
        try {
            SupplierArea::withTrashed()->where('id',$id)->restore();
            $data = SupplierArea::find($id);
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'restore',
                'description' => 'Restore Supplier Area which name is '.$data->area_name,
                'description_bn' => 'একটি সাপ্লইয়ার এরিয়া পুরুদ্ধার করেছেন যার নাম '.$data->area_name,
            ]);
            History::create([
                'tag' => 'supplier_area',
                'fk_id' => $id,
                'type' => 'restore',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('supplier_area.restore_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function delete($id)
    {
        try{
            $data = SupplierArea::withTrashed()->where('id',$id)->first();
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'delete',
                'description' => 'Permenantly Delete Supplier Area which name is '.$data->area_name,
                'description_bn' => 'একটি সাপ্লাইয়ার এরিয়া সম্পূর্ণ করেছেন যার নাম '.$data->area_name,
            ]);

            History::where('tag','supplier_area')->where('fk_id',$id)->delete();

            SupplierArea::withTrashed()->where('id',$id)->forceDelete();
            toastr()->success(__('supplier_area.delete_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        }
        catch(\Throwable $th){
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function print(){

    }

    public function status($id)
    {
        $check = SupplierArea::withTrashed()->where('id',$id)->first();

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
            'description' => 'Change Status of Supplier Area which name is '.$check->supplier_area,
            'description_bn' => 'একটি সাপ্লাইয়ার এরিয়া এর স্ট্যাটাস পরিবর্তন করেছেন যার নাম '.$check->supplier_area,
        ]);
        History::create([
            'tag' => 'supplier_area',
            'fk_id' => $id,
            'type' => 'status',
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'user_id' => Auth::user()->id,
        ]);

        return 1;
    }
}
