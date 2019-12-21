<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElementComponent extends Model {

    protected $fillable = [
        'name',
        'component'
    ];

    public function elements() {
        return $this->belongsToMany(Element::class);
    }
}
