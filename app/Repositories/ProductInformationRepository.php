<?php
namespace App\Repositories;
use App\Interfaces\ProductInformationInterface;
use App\Traits\ViewDirective;
use App\Models\ProductItem;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Models\Unit;
use App\Models\PrdouctInformation;
use App\Models\ProductSize;
use App\Models\ProductColor;
use App\Models\PrdouctSizeInfo;
use App\Models\PrdouctColorInfo;
use App\Models\PrdouctImage;
use App\Models\ActivityLog;
use Auth;
use App\Models\History;
use Yajra\DataTables\Facades\DataTables;

class ProductInformationRepository implements ProductInformationInterface{

    use ViewDirective;
    protected $path,$sl;
    public function __construct()
    {
        $this->path = 'admin.product_information';
    }

    public function index($datatable)
    {
        if($datatable == 1)
        {
            $data = PrdouctInformation::all();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('serial',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('item_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->item->item_name ?: $row->item->item_name_bn;
                }
                else
                {
                    return $row->item->item_name_bn ?: $row->item->item_name;
                }
            })
            ->addColumn('category_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->category->category_name ?: $row->category->category_name_bn;
                }
                else
                {
                    return $row->category->category_name_bn ?: $row->category->category_name;
                }
            })
            ->addColumn('sub_category_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->sub_category_name ?: $row->sub_category_name_bn;
                }
                else
                {
                    return $row->sub_category_name_bn ?: $row->sub_category_name;
                }
            })
            ->addColumn('unit_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->unit_name ?: $row->unit_name_bn;
                }
                else
                {
                    return $row->unit_name_bn ?: $row->unit_name;
                }
            })
            ->addColumn('product_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->product_name ?: $row->product_name_bn;
                }
                else
                {
                    return $row->product_name_bn ?: $row->product_name;
                }
            })
            ->addColumn('purchase_price',function($row){
                
                return $row->purchase_price;

            })
            ->addColumn('sale_price',function($row){
                
                return $row->sale_price;

            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Product Information status'))
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
                    <input onchange="return changeProductInformationStatus('.$row->id.')" id="cbx-51" type="checkbox" '.$checked.'>
                    <label class="toggle" for="cbx-51">
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
                if(Auth::user()->can('Product Information show'))
                {
                    $show_btn = '<a class="dropdown-item" href="'.route('product_information.show',$row->id).'"><i class="fa fa-eye"></i> '.__('common.show').'</a>';
                }
                else
                {
                    $show_btn ='';
                }

                if(Auth::user()->can('Product Information edit'))
                {
                    $edit_btn = '<a class="dropdown-item" href="'.route('product_information.edit',$row->id).'"><i class="fa fa-edit"></i> '.__('common.edit').'</a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Product Information destroy'))
                {
                    $delete_btn = '<form id="" method="post" action="'.route('product_information.destroy',$row->id).'">
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
            ->rawColumns(['action','item_name','category_name','sub_category_name','unit_name','product_name','purchase_price','sale_price','sl','status'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'index');
    }

    public function create()
    {
        $data['item'] = ProductItem::where('status',1)->get();
        $data['category'] = ProductCategory::where('status',1)->get();
        $data['sub_category'] = ProductSubCategory::where('status',1)->get();
        $data['unit'] = Unit::where('status',1)->get();
        $data['size'] = ProductSize::where('status',1)->get();
        $data['color'] = ProductColor::where('status',1)->get();
        return ViewDirective::view($this->path,'create',$data);
    }

    public function store($request)
    {
        try {
            $data = array(
                'sl' => $request->sl,
                'item_id' => $request->item_id,
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'product_name' => $request->product_name,
                'product_name_bn' => $request->product_name_bn,
                'status' => 1,
                'image' => '0',
            );

            $image = $request->file('image');

            if($image)
            {
                $imageName = rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path().'/backend/Product/ProductImage/',$imageName);
                $data['image'] = $imageName;
            }

            PrdouctInformation::create($data);
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'create',
                'description' => 'Create Product Information which name is '.$request->product_name,
                'description_bn' => 'একটি পণ্য তথ্য তৈরি করেছেন যার নাম '.$request->product_name,
            ]);

            toastr()->success(__('product_information.create_message'), __('common.success'), ['timeOut' => 5000]);
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

    public function trash_list($datatable)
    {
        if($datatable == 1)
        {
            $data = PrdouctInformation::onlyTrashed()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('item_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->item->item_name ?: $row->item->item_name_bn;
                }
                else
                {
                    return $row->item->item_name_bn ?: $row->item->item_name;
                }
            })
            ->addColumn('category_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->category->category_name ?: $row->category->category_name_bn;
                }
                else
                {
                    return $row->category->category_name_bn ?: $row->category->category_name;
                }
            })
            ->addColumn('sub_category_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->sub_category_name ?: $row->sub_category_name_bn;
                }
                else
                {
                    return $row->sub_category_name_bn ?: $row->sub_category_name;
                }
            })
            ->addColumn('unit_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->unit_name ?: $row->unit_name_bn;
                }
                else
                {
                    return $row->unit_name_bn ?: $row->unit_name;
                }
            })
            ->addColumn('product_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->product_name ?: $row->product_name_bn;
                }
                else
                {
                    return $row->product_name_bn ?: $row->product_name;
                }
            })
            ->addColumn('purchase_price',function($row){
                
                return $row->purchase_price;

            })
            ->addColumn('sale_price',function($row){
                
                return $row->sale_price;

            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Product Information status'))
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
                    <input onchange="return changeProductInformationStatus('.$row->id.')" id="cbx-51" type="checkbox" '.$checked.'>
                    <label class="toggle" for="cbx-51">
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
                if(Auth::user()->can('Product Information restore'))
                {
                    $restore_btn = '<a class="dropdown-item" href="'.route('product_information.restore',$row->id).'"><i class="fa fa-trash-arrow-up"></i> '.__('common.restore').'</a>';
                }
                else
                {
                    $restore_btn = '';
                }

                if(Auth::user()->can('Product Information delete'))
                {
                    $delete_btn = '<a onclick="return Sure()" class="dropdown-item text-danger" href="'.route('product_information.delete',$row->id).'"><i class="fa fa-trash"></i> '.__('common.delete').'</a>';
                }
                else
                {
                    $delete_btn = '';
                }


                $output = '<div class="dropdown font-sans-serif">
                <a class="btn btn-phoenix-default dropdown-toggle" id="dropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.__('common.action').'</a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuLink" style="">'.$restore_btn.' '.$delete_btn.'
                </div>
              </div>';
                return $output;
            })
            ->rawColumns(['action','item_name','category_name','sub_category_name','unit_name','product_name','purchase_price','sale_price','sl','status'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'trash_list');
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
            $data = PrdouctInformation::withTrashed()->where('id',$id)->first();
            if($data->status == 1)
            {
                PrdouctInformation::withTrashed()->where('id',$id)->update([
                    'status' => 0,
                ]);
            }
            else
            {
                PrdouctInformation::withTrashed()->where('id',$id)->update([
                    'status' => 1,
                ]);
            }
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'status',
                'description' => 'Change Status Product Information which name is '.$data->sub_category_name,
                'description_bn' => 'একটি পণ্য তথ্য স্ট্যাটাস পরিবর্তন করেছেন যার নাম '.$data->sub_category_name,
            ]);

            History::create([
                'tag' => 'product_information',
                'fk_id' => $id,
                'type' => 'status',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('product_information.status_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function GetSubCategorie($sub_category_id)
    {
        $this->lang = config('app.locale');
  
        $data = ProductSubCategory::where('category_id',$sub_category_id)->get();


        $output = '<option value="">'.__('common.select_one').'</option>';


        foreach($data as $v)
        {

                $output .= '<option value="'.$v->id.'">'.$v->sub_category_name.'</option>';
           
        }
        return $output;
    }
}
        