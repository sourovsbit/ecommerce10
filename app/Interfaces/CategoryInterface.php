<?php
namespace App\Interfaces;
use App\Interfaces\BaseInterface;

interface CategoryInterface extends BaseInterface{
    public function status($id);
}
