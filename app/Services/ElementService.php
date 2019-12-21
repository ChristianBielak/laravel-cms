<?php

namespace App\Services;

use App\Element;
use Flobbos\Crudable\Contracts\Crud;
use Flobbos\Crudable;

class ElementService implements Crud {
    
    use Crudable\Crudable;
    
    public function __construct(Element $element) {
        $this->model = $element;
    }
    
}