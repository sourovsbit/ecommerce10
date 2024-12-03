<?php
namespace App\Repositories;
use App\Interfaces\SubUnitInterface;
use App\Models\SubUnit;
use App\Models\Unit;
use App\Models\ActivityLog;
use App\Models\History;
use Auth;
use Session;
use App\Traits\ViewDirective;
use Yajra\DataTables\Facades\DataTables;

class SubUnitRepository implements SubUnitInterface{
    protected $path,$sl;
    use ViewDirective;
    public function __construct()
    {
        $this->path = 'stores.sub_unit';
    }
    public function index($datatable)
    {
        if($datatable == 1)
        {
            $data = SubUnit::where('store_id',Session::get('store_id'))->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('unit_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->unit->unit_name ?: $row->unit->unit_name_bn;
                }
                else
                {
                    return $row->unit->unit_name_bn ?: $row->unit->unit_name;
                }
            })
            ->addColumn('sub_unit_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->sub_unit_name ?: $row->sub_unit_name_bn;
                }
                else
                {
                    return $row->sub_unit_name_bn ?: $row->sub_unit_name;
                }
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Sub Unit status'))
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
                    <input onchange="return changeSubUnitStatus('.$row->id.')" id="cbx-'.$row->id.'" type="checkbox" '.$checked.'>
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
                if(Auth::user()->can('Sub Unit show'))
                {
                    $show_btn = '<a style="float:left;margin-right:5px;" href="'.route('sub_unit.show',$row->id).'" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>';
                }
                else
                {
                    $show_btn = '';
                }

                if(Auth::user()->can('Sub Unit edit'))
                {
                    $edit_btn = '<a style="float:left;margin-right:5px;" href="'.route('sub_unit.edit',$row->id).'" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Sub Unit destroy'))
                {
                    $delete_btn = '<form id="" method="post" action="'.route('sub_unit.destroy',$row->id).'">
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
            ->rawColumns(['action','unit_name','sub_unit_name','sl','status'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'index');
    }

    public function create()
    {
        $data['unit'] = Unit::where('status',1)->where('store_id',Session::get('store_id'))->get();
        return ViewDirective::view($this->path,'create',$data);
    }

    public function store($request)
    {
        $data = array(
            'unit_id' => $request->unit_id,
            'sub_unit_name' => $request->sub_unit_name,
            'sub_unit_name_bn' => $request->sub_unit_name_bn,
            'sub_unit_data' => $request->sub_unit_data,
            'status' => 1,
            'store_id' => Session::get('store_id'),
        );

        // dd($data);

        // return $data;

        try {
            SubUnit::create($data);
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'create',
                'description' => 'Create Sub Unit which name is '.$request->sub_unit_name,
                'description_bn' => 'একটি সাব ইউনিট তৈরি করেছেন যার নাম '.$request->sub_unit_name,
            ]);
            toastr()->success(__('sub_unit.create_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function show($id)
    {
        $data['data'] = SubUnit::find($id);
        $data['histories'] = History::where('tag','sub_unit')->where('fk_id',$id)->get();
        return ViewDirective::view($this->path,'show',$data);
    }

    public function properties($id){

    }

    public function edit($id)
    {
        $data['data'] = SubUnit::find($id);
        $data['unit'] = Unit::where('status',1)->where('store_id',Session::get('store_id'))->get();
        return ViewDirective::view($this->path,'edit',$data);
    }

    public function update($request, $id){
        $data = array(
            'unit_id' => $request->unit_id,
            'sub_unit_name' => $request->sub_unit_name,
            'sub_unit_name_bn' => $request->sub_unit_name_bn,
            'sub_unit_data' => $request->sub_unit_data,
        );

        try {
            SubUnit::find($id)->update($data);
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'update',
                'description' => 'Update Sub Unit which name is '.$request->sub_unit_name,
                'description_bn' => 'একটি সাব ইউনিট সম্পাদন করেছেন যার নাম '.$request->sub_unit_name,
            ]);
            History::create([
                'tag' => 'sub_unit',
                'fk_id' => $id,
                'type' => 'update',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('sub_unit.update_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            SubUnit::find($id)->delete();
            $data = SubUnit::withTrashed()->where('id',$id)->first();
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'destroy',
                'description' => 'Delete Sub Unit which name is '.$data->sub_unit_name,
                'description_bn' => 'একটি সাব ইউনিট ডিলেট করেছেন যার নাম '.$data->sub_unit_name,
            ]);
            History::create([
                'tag' => 'sub_unit',
                'fk_id' => $id,
                'type' => 'destroy',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('sub_unit.delete_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function trash_list($datatable)
    {
        if($datatable == 1)
        {
            $data = SubUnit::where('store_id',Session::get('store_id'))->onlyTrashed()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('unit_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->unit->unit_name ?: $row->unit->unit_name_bn;
                }
                else
                {
                    return $row->unit->unit_name_bn ?: $row->unit->unit_name;
                }
            })
            ->addColumn('sub_unit_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->sub_unit_name ?: $row->sub_unit_name_bn;
                }
                else
                {
                    return $row->sub_unit_name_bn ?: $row->sub_unit_name;
                }
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Sub Unit status'))
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
                    <input onchange="return changeSubUnitStatus('.$row->id.')" id="cbx-'.$row->id.'" type="checkbox" '.$checked.'>
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
                if(Auth::user()->can('Sub Unit restore'))
                {
                    $edit_btn = '<a style="float:left;margin-right:5px;" href="'.route('sub_unit.restore',$row->id).'" class="btn btn-sm btn-info"><i class="fa fa-arrow-left"></i></a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Sub Unit delete'))
                {
                    $delete_btn = '<a onclick="return Sure();" style="float:left;margin-right:5px;" href="'.route('sub_unit.delete',$row->id).'" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>';
                }
                else
                {
                    $delete_btn ='';
                }



                $return_btn = $edit_btn.''.$delete_btn;

                return $return_btn;
            })
            ->rawColumns(['action','unit_name','sub_unit_name','sl','status'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'trash_list');
    }

    public function restore($id)
    {
        try {
            SubUnit::withTrashed()->where('id',$id)->restore();
            $data = SubUnit::find($id);
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'restore',
                'description' => 'Restore Sub Unit which name is '.$data->sub_unit_name,
                'description_bn' => 'একটি সাব ইউনিট পুরুদ্ধার করেছেন যার নাম '.$data->sub_unit_name,
            ]);
            History::create([
                'tag' => 'sub_unit',
                'fk_id' => $id,
                'type' => 'restore',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('sub_unit.restore_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function delete($id)
    {
        try{
            $data = SubUnit::withTrashed()->where('id',$id)->first();
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'delete',
                'description' => 'Permenantly Delete Sub Unit which name is '.$data->sub_unit_name,
                'description_bn' => 'একটি সাব ইউনিট সম্পূর্ণ করেছেন যার নাম '.$data->sub_unit_name,
            ]);

            History::where('tag','sub_unit')->where('fk_id',$id)->delete();

            SubUnit::withTrashed()->where('id',$id)->forceDelete();
            toastr()->success(__('sub_unit.delete_message'), __('common.success'), ['timeOut' => 5000]);
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
        $check = SubUnit::withTrashed()->where('id',$id)->first();

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
            'description' => 'Change Status of Sub Unit which name is '.$check->sub_unit_name,
            'description_bn' => 'একটি সাব ইউনিট এর স্ট্যাটাস পরিবর্তন করেছেন যার নাম '.$check->sub_unit_name,
        ]);
        History::create([
            'tag' => 'sub_unit',
            'fk_id' => $id,
            'type' => 'status',
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'user_id' => Auth::user()->id,
        ]);

        return 1;
    }
}
