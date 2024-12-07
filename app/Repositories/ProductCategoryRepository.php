<?php
namespace App\Repositories;
use App\Interfaces\ProductCategoryInterface;
use App\Traits\ViewDirective;
use App\Models\ProductItem;

class ProductCategoryRepository implements ProductCategoryInterface{
    use ViewDirective;
    protected $path,$sl;
    public function __construct()
    {
        $this->path = 'admin.product_category';
    }
    public function index($datatable)
    {

    }

    public function create()
    {
        $data['item'] = ProductItem::where('status',1)->get();
        return ViewDirective::view($this->path,'create',$data);
    }

    public function store($request){

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
}
