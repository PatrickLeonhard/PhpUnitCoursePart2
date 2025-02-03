<?php

namespace App;

use App\Item;

class ItemChild extends Item {
    public function getId()
    {
        return parent::getId();
    }
    public function getToken(){
        return parent::getToken();
    }
}