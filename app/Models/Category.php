<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const COMMERCIAL = 1;
    const FASHION = 2;
    const TIMELESS = 3;
    const CURVE = 4;
    const KIDS = 5;

    const CATEGORIES = [
        self::COMMERCIAL => 'commercial',
        self::FASHION => 'fashion',
        self::TIMELESS => 'timeless',
        self::CURVE => 'curve',
        self::KIDS => 'kids',
    ];

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
