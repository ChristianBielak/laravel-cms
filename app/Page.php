<?php

namespace App;

use Flobbos\TranslatableDB\TranslatableDB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    use TranslatableDB;

    protected $translatedAttributes = [
        'title',
        'meta_title',
        'meta_description'
    ];

    protected $fillable = [
        'name'
    ];

    public function rows() {
        return $this->hasMany(Row::class);
    }

    public function subPages() {
        return $this->hasMany(Page::class);
    }
}
