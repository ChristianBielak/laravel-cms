<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColumnTranslation extends Model {

    protected $fillable = [
        'content',
        'column_id',
        'language_id'
    ];

    protected $casts = [
        'content' => 'array'
    ];

    public function column() {
        return $this->belongsTo(Column::class);
    }

}
