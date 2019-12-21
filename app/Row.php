<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Row extends Model {

    protected $fillable = [
        'page_id',
        'sorting',
        'is_expanded'
    ];

    public function columns() {
        return $this->hasMany(Column::class);
    }
}
