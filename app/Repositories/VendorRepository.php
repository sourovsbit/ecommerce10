<?php
namespace App\Repositories;
use App\Interfaces\VendorInterface;
use App\Traits\ViewDirective;
use App\Models\Country;
use App\Models\Vendor;
use Auth;
use Hash;
use App\Models\History;
use App\Models\ActivityLog;
use Yajra\DataTables\Facades\DataTables;

class VendorRepository implements VendorInterface{

    use ViewDirective;
    protected $path,$sl;

    public function __construct()
    {
        $this->path = 'admin.vendor';
    }

    public function index($datatable)
    {
        if($datatable == 1)
        {
            $data = Vendor::all();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('serial',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('country_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->country->country_name ?: $row->country->country_name_bn;
                }
                else
                {
                    return $row->country->country_name_bn ?: $row->country->country_name;
                }
            })
            ->addColumn('vendor_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->vendor_name ?: $row->vendor_name_bn;
                }
                else
                {
                    return $row->vendor_name_bn ?: $row->vendor_name;
                }
            })
            ->addColumn('vendor_phone',function($row){
                
                return $row->vendor_phone;

            })
            ->addColumn('company_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->company_name ?: $row->company_name_bn;
                }
                else
                {
                    return $row->company_name_bn ?: $row->company_name;
                }
            })
            ->addColumn('company_phone',function($row){
                
                return $row->company_phone;

            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Vendor status'))
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
                    <input onchange="return changeVendorStatus('.$row->id.')" id="cbx-51-'.$row->id.'" type="checkbox" '.$checked.'>
                    <label class="toggle" for="cbx-51-'.$row->id.'">
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
                if(Auth::user()->can('Vendor show'))
                {
                    $show_btn = '<a class="dropdown-item" href="'.route('vendor.show',$row->id).'"><i class="fa fa-eye"></i> '.__('common.show').'</a>';
                }
                else
                {
                    $show_btn ='';
                }

                if(Auth::user()->can('Vendor edit'))
                {
                    $edit_btn = '<a class="dropdown-item" href="'.route('vendor.edit',$row->id).'"><i class="fa fa-edit"></i> '.__('common.edit').'</a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Vendor destroy'))
                {
                    $delete_btn = '<form id="" method="post" action="'.route('vendor.destroy',$row->id).'">
                    '.csrf_field().'
                    '.method_field('DELETE').'
                    <button onclick="return Sure()" type="post" class="dropdown-item text-danger"><i class="fa fa-trash"></i> '.__('common.destroy').'</button>
                    </form>';
                }
                else
                {
                    $delete_btn ='';
                }



                $output = '<div class="dropdown font-sans-serif">
                <a class="btn btn-phoenix-default dropdown-toggle" id="dropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.__('common.action').'</a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuLink" style="">'.$show_btn.' '.$edit_btn.' '.$delete_btn.'
                </div>
              </div>';
                return $output;
            })
            ->rawColumns(['action','country_name','vendor_name','company_name','sl','status'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'index');
    }

    public function create()
    {
        $data['country'] = Country::where('status',1)->get();
        return ViewDirective::view($this->path,'create',$data);
    }

    public function store($request)
    {
        try {
            $data = array(
                'sl' => $request->sl,
                'vendor_id' => 1,
                'country_id' => $request->country_id,
                'vendor_name' => $request->vendor_name,
                'vendor_name_bn' => $request->vendor_name_bn,
                'vendor_phone' => $request->vendor_phone,
                'company_name' => $request->company_name,
                'company_name_bn' => $request->company_name_bn,
                'company_phone' => $request->company_phone,
                'email' => $request->email,
                'nid' => $request->nid,
                'address' => $request->address,
                'status' => 1,
                'image' => '0',
                'banner' => '0',
                'password' => Hash::make($request->password),
                'raw_password' => $request->password,
            );

            $image = $request->file('image');
            $banner = $request->file('banner');

            if($image)
            {
                $imageName = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/backend/Vendor/VendorImage/',$imageName);
                $data['image'] = $imageName;
            }
            if($banner)
            {
                $bannerName = rand().'.'.$banner->getClientOriginalExtension();
                $banner->move(public_path().'/backend/Vendor/VendorBanner/',$bannerName);
                $data['banner'] = $bannerName;
            }

            Vendor::create($data);
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'create',
                'description' => 'Create Vendor Information which name is '.$request->vendor_name,
                'description_bn' => 'একটি ভেন্ডর ইনফরমেশন তৈরি করেছেন যার নাম '.$request->vendor_name,
            ]);

            toastr()->success(__('vendor.create_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function show($id){

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
        try {
            $data = Vendor::withTrashed()->where('id',$id)->first();
            if($data->status == 1)
            {
                Vendor::withTrashed()->where('id',$id)->update([
                    'status' => 0,
                ]);
            }
            else
            {
                Vendor::withTrashed()->where('id',$id)->update([
                    'status' => 1,
                ]);
            }
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'status',
                'description' => 'Change Status Vendor which name is '.$data->vendor_name,
                'description_bn' => 'একটি ভেন্ডর স্ট্যাটাস পরিবর্তন করেছেন যার নাম '.$data->vendor_name,
            ]);

            History::create([
                'tag' => 'vendor',
                'fk_id' => $id,
                'type' => 'status',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('vendor.status_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
}
        