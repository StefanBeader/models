<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function models()
    {
        return $this->belongsToMany(Mannequin::class,
            'mannequins_categories',
            'category_id',
            'mannequin_id'
        );
    }
}
