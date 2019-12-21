<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model {

    protected $fillable = [
        'title',
        'meta_title',
        'meta_description',
        'language_id',
        'page_id'
    ];

    public function language() {
        return $this->belongsTo(Language::class);
    }

    public function page() {
        return $this->belongsTo(Page::class);
    }
}
