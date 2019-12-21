<?php

namespace App\Services;

use App\Language;
use Flobbos\Crudable\Contracts\Crud;
use Flobbos\Crudable;

class LanguageService implements Crud {
    
    use Crudable\Crudable;
    
    public function __construct(Language $language) {
        $this->model = $language;
    }
    
}