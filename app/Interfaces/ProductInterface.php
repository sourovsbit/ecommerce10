<?php
namespace App\Interfaces;
use App\Interfaces\BaseInterface;

interface ProductInterface extends BaseInterface{
    public function status($id);
}
