<?php
namespace App\Interfaces;
use App\Interfaces\BaseInterface;

interface DelivaryChargeInterface extends BaseInterface{
        public function status($id);

        public function GetDivision($id);
}
        