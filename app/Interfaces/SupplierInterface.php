<?php
namespace App\Interfaces;
use App\Interfaces\BaseInterface;

interface SupplierInterface extends BaseInterface{
    public function status($id);
}
