<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model {

    protected $fillable = [
        'name',
        'icon'
    ];

    public function elementComponents() {
        return $this->hasMany(ElementComponent::class);
    }
}
