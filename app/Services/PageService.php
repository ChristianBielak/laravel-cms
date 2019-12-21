<?php

namespace App\Services;

use App\Page;
use Flobbos\Crudable\Contracts\Crud;
use Flobbos\Crudable;

class PageService implements Crud {
    
    use Crudable\Crudable;
    
    public function __construct(Page $page) {
        $this->model = $page;
    }
    
}