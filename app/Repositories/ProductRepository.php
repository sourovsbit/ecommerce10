<?php
namespace App\Repositories;
use App\Interfaces\ProductInterface;
use App\Traits\ViewDirective;
use App\Models\ProductItem;
use App\Models\Brand;
use App\Models\Unit;
use App\Traits\Idgenerator;
use App\Models\Product;
use App\Models\Category;
use App\Models\History;
use App\Models\ProductSizeInfo;
use App\Models\ProductColorInfo;
use Session;
use Auth;
use App\Models\ActivityLog;
use Yajra\DataTables\Facades\DataTables;

class ProductRepository implements ProductInterface{
    use ViewDirective,Idgenerator;
    protected $path,$sl;
    public function __construct()
    {
        $this->path = 'stores.product';
    }
    public function index($datatable)
    {
        $data['item'] = ProductItem::where('status',1)->get();
        $data['brand'] = Brand::where('status',1)->get();
        if($datatable == 1)
        {
            $data = Product::where(function($query){
                $query->where('store_id',Session::get('store_id'));
            });
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('product_info',function($row){
                if(config('app.locale') == 'en')
                {
                    $item_name = $row->item->item_name ?: $row->item->item_name_bn;
                    $cat_name = $row->category->category_name ?: $row->category->category_name_bn;
                    $brand_name = $row->brand->brand_name ?: $row->brand->brand_name_bn;
                    $unit_name = $row->unit->unit_name ?: $row->uinit->unit_name_bn;
                }
                else
                {
                    $item_name = $row->item->item_name_bn ?: $row->item->item_name;
                    $cat_name = $row->category->category_name_bn ?: $row->category->category_name;
                    $brand_name = $row->brand->brand_name_bn ?: $row->brand->brand_name;
                    $unit_name = $row->unit->unit_name_bn ?: $row->uinit->unit_name;
                }

                return  __('product_item.item_name').': '.$item_name.'<br>
                '.__('category.category_name').' : '.$cat_name.'<br>
                '.__('brand.brand_name').' : '.$brand_name.'<br>
                '.__('unit.unit_name').' : '.$unit_name.'<br>';

            })
            ->addColumn('pdt_name',function($row){

                if($row->type == 1)
                {
                    $type = __('product.simple');
                }
                else
                {
                    $type = __('product.variable');
                }

                $output = '';

                if(config('app.locale') == 'en')
                {
                    $output .=  $row->product_name .'('.$type.')' ?: $row->product_name_bn.'('.$type.')';
                }
                else
                {
                    $output.= $row->product_name_bn .'('.$type.')' ?: $row->product_name.'('.$type.')';
                }

                if($row->type == 2)
                {
                    $output.='<hr>';
                    $colors = ProductColorInfo::where('product_id',$row->product_id)->get();
                    $sizes = ProductSizeInfo::where('product_id',$row->product_id)->get();
                    if(count($colors) > 0)
                    {
                        $output.='<b>'.__('product.color').' :</b>';
                        foreach($colors as $c)
                        {
                            if(config('locale') == 'en')
                            {
                                $color_name  = $c->color->color_name ?: $c->color->color_name_bn;
                            }
                            else
                            {
                                $color_name = $c->color_name_bn ?: $c->color->color_name;
                            }
                            $output.= $color_name.',';
                        }

                        $output.='<br>';
                    }
                    if(count($sizes) > 0)
                    {
                        $output.='<b>'.__('product.sizes').' :</b>';
                        foreach($sizes as $s)
                        {
                            $output.= $s->size->size_name.',';
                        }
                    }
                }

                return $output;

            })
            ->addColumn('pricing',function($row){
                return __('product.purchase_price').' : '.$row->purchase_price.'/-<br>
                '.__('product.sale_price').' : '.$row->sale_price.'/-';
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Product Add status'))
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
                    <input onchange="return changeProductStatus('.$row->id.')" id="cbx-'.$row->id.'" type="checkbox" '.$checked.'>
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
                if(Auth::user()->can('Product Add show'))
                {
                    $show_btn = '<a style="float:left;margin-right:5px;" href="'.route('product.show',$row->id).'" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>';
                }
                else
                {
                    $show_btn = '';
                }

                if(Auth::user()->can('Product Add edit'))
                {
                    $edit_btn = '<a style="float:left;margin-right:5px;" href="'.route('product.edit',$row->id).'" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Product Add destroy'))
                {
                    $delete_btn = '<form id="" method="post" action="'.route('product.destroy',$row->id).'">
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
            ->rawColumns(['action','product_info','pdt_name','sl','status','pricing'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'index',$data);
    }

    public function create()
    {
        $data['item'] = ProductItem::where('status',1)->where('store_id',Session::get('store_id'))->get();
        $data['brand'] = Brand::where('status',1)->where('store_id',Session::get('store_id'))->get();
        $data['unit'] = Unit::where('status',1)->where('store_id',Session::get('store_id'))->get();
        return ViewDirective::view($this->path,'create',$data);
    }

    public function store($request)
    {
        $product_id = Idgenerator::AutoCode('products','product_id','PDT-','10');
        $data = array(
            'product_id' => $product_id,
            'item_id' => $request->item_id,
            'cat_id' => $request->cat_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'product_name_bn' => $request->product_name_bn,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'shelf_no' => $request->shelf_no,
            'stock_alert' => $request->stock_alert,
            'unit_id' => $request->unit_id,
            'type' => $request->type,
            'status' => 1,
            'store_id' => Session::get('store_id'),
        );

        // return $data;

        try {
            Product::create($data);

            if($request->type == 2)
            {
                for ($i=0; $i < count($request->color) ; $i++)
                {
                    ProductColorInfo::create([
                        'product_id' => $product_id,
                        'color_id' => $request->color[$i],
                    ]);
                }
                for ($i=0; $i < count($request->size) ; $i++)
                {
                    ProductSizeInfo::create([
                        'product_id' => $product_id,
                        'size_id' => $request->size[$i],
                    ]);
                }
            }

            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'create',
                'description' => 'Create Product which name is '.$request->product_name,
                'description_bn' => 'একটি প্রোডাক্ট তৈরি করেছেন যার নাম '.$request->product_name,
            ]);
            toastr()->success(__('product.create_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function show($id)
    {
        $data['data'] = Product::find($id);
        $data['histories']  = History::where('tag','product')->where('fk_id',$id)->get();
        return ViewDirective::view($this->path,'show',$data);
    }

    public function properties($id){

    }

    public function edit($id)
    {
        $data['data'] = Product::find($id);
        $data['item'] = ProductItem::where('status',1)->where('store_id',Session::get('store_id'))->get();
        $data['brand'] = Brand::where('status',1)->where('store_id',Session::get('store_id'))->get();
        $data['unit'] = Unit::where('status',1)->where('store_id',Session::get('store_id'))->get();
        $data['cat'] = Category::where('item_id',$data['data']->item_id)->get();
        return ViewDirective::view($this->path,'edit',$data);
    }

    public function update($request, $id)
    {
        try {
            $data = array(
                'item_id' => $request->item_id,
                'cat_id' => $request->cat_id,
                'brand_id' => $request->brand_id,
                'product_name' => $request->product_name,
                'product_name_bn' => $request->product_name_bn,
                'purchase_price' => $request->purchase_price,
                'sale_price' => $request->sale_price,
                'shelf_no' => $request->shelf_no,
                'stock_alert' => $request->stock_alert,
                'unit_id' => $request->unit_id,
                'type' => $request->type,
                'status' => 1,
                'store_id' => Session::get('store_id'),
            );
            Product::find($id)->update($data);
            $product = Product::find($id);
            if($request->type == 2)
            {
                ProductColorInfo::where('product_id',$product->product_id)->forceDelete();
                ProductSizeInfo::where('product_id',$product->product_id)->forceDelete();
                for ($i=0; $i < count($request->color) ; $i++)
                {
                    ProductColorInfo::create([
                        'product_id' => $product->product_id,
                        'color_id' => $request->color[$i],
                    ]);
                }
                for ($i=0; $i < count($request->size) ; $i++)
                {
                    ProductSizeInfo::create([
                        'product_id' => $product->product_id,
                        'size_id' => $request->size[$i],
                    ]);
                }
            }
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'update',
                'description' => 'Update Product which name is '.$request->product_name,
                'description_bn' => 'একটি প্রোডাক্ট আইটেম সম্পাদন করেছেন যার নাম '.$request->product_name,
            ]);
            History::create([
                'tag' => 'product',
                'fk_id' => $id,
                'type' => 'update',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('product.update_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::find($id);
            ProductSizeInfo::where('product_id',$product->product_id)->delete();
            ProductColorInfo::where('product_id',$product->product_id)->delete();
            Product::find($id)->delete();
            $data = Product::withTrashed()->where('id',$id)->first();
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'destroy',
                'description' => 'Delete Product which name is '.$data->product_name,
                'description_bn' => 'একটি প্রোডাক্ট ডিলেট করেছেন যার নাম '.$data->product_name,
            ]);
            History::create([
                'tag' => 'product',
                'fk_id' => $id,
                'type' => 'destroy',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('product.delete_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function trash_list($datatable)
    {
        $data['item'] = ProductItem::where('status',1)->get();
        $data['brand'] = Brand::where('status',1)->get();
        if($datatable == 1)
        {
            $data = Product::onlyTrashed()->where(function($query){
                $query->where('store_id',Session::get('store_id'));
            });
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('product_info',function($row){
                if(config('app.locale') == 'en')
                {
                    $item_name = $row->item->item_name ?: $row->item->item_name_bn;
                    $cat_name = $row->category->category_name ?: $row->category->category_name_bn;
                    $brand_name = $row->brand->brand_name ?: $row->brand->brand_name_bn;
                    $unit_name = $row->unit->unit_name ?: $row->uinit->unit_name_bn;
                }
                else
                {
                    $item_name = $row->item->item_name_bn ?: $row->item->item_name;
                    $cat_name = $row->category->category_name_bn ?: $row->category->category_name;
                    $brand_name = $row->brand->brand_name_bn ?: $row->brand->brand_name;
                    $unit_name = $row->unit->unit_name_bn ?: $row->uinit->unit_name;
                }

                return  __('product_item.item_name').': '.$item_name.'<br>
                '.__('category.category_name').' : '.$cat_name.'<br>
                '.__('brand.brand_name').' : '.$brand_name.'<br>
                '.__('unit.unit_name').' : '.$unit_name.'<br>';

            })
            ->addColumn('pdt_name',function($row){

                if($row->type == 1)
                {
                    $type = __('product.simple');
                }
                else
                {
                    $type = __('product.variable');
                }

                $output = '';

                if(config('app.locale') == 'en')
                {
                    $output .=  $row->product_name .'('.$type.')' ?: $row->product_name_bn.'('.$type.')';
                }
                else
                {
                    $output.= $row->product_name_bn .'('.$type.')' ?: $row->product_name.'('.$type.')';
                }

                if($row->type == 2)
                {
                    $output.='<hr>';
                    $colors = ProductColorInfo::where('product_id',$row->product_id)->get();
                    $sizes = ProductSizeInfo::where('product_id',$row->product_id)->get();
                    if(count($colors) > 0)
                    {
                        $output.='<b>'.__('product.color').' :</b>';
                        foreach($colors as $c)
                        {
                            if(config('locale') == 'en')
                            {
                                $color_name  = $c->color->color_name ?: $c->color->color_name_bn;
                            }
                            else
                            {
                                $color_name = $c->color_name_bn ?: $c->color->color_name;
                            }
                            $output.= $color_name.',';
                        }

                        $output.='<br>';
                    }
                    if(count($sizes) > 0)
                    {
                        $output.='<b>'.__('product.sizes').' :</b>';
                        foreach($sizes as $s)
                        {
                            $output.= $s->size->size_name.',';
                        }
                    }
                }

                return $output;

            })
            ->addColumn('pricing',function($row){
                return __('product.purchase_price').' : '.$row->purchase_price.'/-<br>
                '.__('product.sale_price').' : '.$row->sale_price.'/-';
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Product Add status'))
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
                    <input onchange="return changeProductStatus('.$row->id.')" id="cbx-'.$row->id.'" type="checkbox" '.$checked.'>
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
                if(Auth::user()->can('Product Add restore'))
                {
                    $edit_btn = '<a style="float:left;margin-right:5px;" href="'.route('product.restore',$row->id).'" class="btn btn-sm btn-info"><i class="fa fa-arrow-left"></i></a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Product Add delete'))
                {
                    $delete_btn = '<a onclick="return Sure();" style="float:left;margin-right:5px;" href="'.route('product.delete',$row->id).'" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>';
                }
                else
                {
                    $delete_btn ='';
                }



                $return_btn = $edit_btn.''.$delete_btn;

                return $return_btn;
            })
            ->rawColumns(['action','product_info','pdt_name','sl','status','pricing'])
            ->make(true);

        }
        return ViewDirective::view($this->path,'trash_list',$data);
    }

    public function restore($id)
    {
        try {
            Product::withTrashed()->where('id',$id)->restore();
            $data = Product::withTrashed()->where('id',$id)->first();
            if($data->type == 2)
            {
                ProductSizeInfo::withTrashed()->where('product_id',$data->product_id)->restore();
                ProductColorInfo::withTrashed()->where('product_id',$data->product_id)->restore();
            }
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'restore',
                'description' => 'Restore Product which name is '.$data->product_name,
                'description_bn' => 'একটি প্রোডাক্ট পুরুদ্ধার করেছেন যার নাম '.$data->product_name,
            ]);
            History::create([
                'tag' => 'product',
                'fk_id' => $id,
                'type' => 'restore',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            toastr()->success(__('product.restore_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $data = Product::withTrashed()->where('id',$id)->first();
            if($data->type == 2)
            {
                ProductSizeInfo::withTrashed()->where('product_id',$data->product_id)->forceDelete();
                ProductColorInfo::withTrashed()->where('product_id',$data->product_id)->forceDelete();
            }
            ActivityLog::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
                'slug' => 'delete',
                'description' => 'Delete Product which name is '.$data->product_name,
                'description_bn' => 'একটি প্রোডাক্ট ডিলেট করেছেন যার নাম '.$data->product_name,
            ]);
            History::create([
                'tag' => 'product',
                'fk_id' => $id,
                'type' => 'restore',
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'user_id' => Auth::user()->id,
            ]);
            Product::withTrashed()->where('id',$id)->forceDelete();
            toastr()->success(__('product.delete_message'), __('common.success'), ['timeOut' => 5000]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function print()
    {

    }

    public function status($id)
    {
        $check = Product::withTrashed()->where('id',$id)->first();

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
            'description' => 'Change Status of Product which name is '.$check->product_name,
            'description_bn' => 'একটি প্রোডাক্ট এর স্ট্যাটাস পরিবর্তন করেছেন যার নাম '.$check->product_name_bn,
        ]);
        History::create([
            'tag' => 'product',
            'fk_id' => $id,
            'type' => 'status',
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'user_id' => Auth::user()->id,
        ]);

        return 1;
    }
}
