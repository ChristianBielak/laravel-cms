<?php

namespace App;

use Flobbos\TranslatableDB\TranslatableDB;
use Illuminate\Database\Eloquent\Model;

class Column extends Model {
    use TranslatableDB;

    protected $translatedAttributes = [
        'content'
    ];

    protected $fillable = [
        'sorting',
        'column_size',
        'row_id',
        'element_id'
    ];

    public function row() {
        return $this->belongsTo(Row::class);
    }

    public function element() {
        return $this->belongsTo(Element::class);
    }
}
