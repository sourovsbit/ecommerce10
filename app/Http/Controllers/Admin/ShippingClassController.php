<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ShippingClassInterface;
use App\Http\Requests\ShippingClassRequest;

class ShippingClassController extends Controller
{
    protected $interface;
    public function __construct(ShippingClassInterface $interface)
    {
        $this->interface = $interface;
        $this->middleware(['permission:Shipping Class view'])->only(['index']);
        $this->middleware(['permission:Shipping Class create'])->only(['create']);
        $this->middleware(['permission:Shipping Class edit'])->only(['edit']);
        $this->middleware(['permission:Shipping Class destroy'])->only(['destroy']);
        $this->middleware(['permission:Shipping Class status'])->only(['status']);
        $this->middleware(['permission:Shipping Class restore'])->only(['restore']);
        $this->middleware(['permission:Shipping Class delete'])->only(['delete']);
        $this->middleware(['permission:Shipping Class show'])->only(['show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datatable ='';
        if($request->ajax())
        {
            $datatable = true;
        }
        return $this->interface->index($datatable);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->interface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShippingClassRequest $request)
    {
        return $this->interface->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->interface->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->interface->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShippingClassRequest $request, string $id)
    {
        return $this->interface->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->interface->destroy($id);
    }

    public function status(Request $request)
    {
        return $this->interface->status($request->id);
    }

    public function trash(Request $request)
    {
        $datatable ='';
        if($request->ajax())
        {
            $datatable = true;
        }

        return $this->interface->trash_list($datatable);
    }

    public function restore($id)
    {
        return $this->interface->restore($id);
    }
    public function delete($id)
    {
        return $this->interface->delete($id);
    }
}
