<?php

namespace App\Services;

use App\ElementComponent;
use Flobbos\Crudable\Contracts\Crud;
use Flobbos\Crudable;

class ElementComponentService implements Crud {
    
    use Crudable\Crudable;
    
    public function __construct(ElementComponent $element_component) {
        $this->model = $element_component;
    }
    
}