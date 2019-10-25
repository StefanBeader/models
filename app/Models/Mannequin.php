<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mannequin extends Model
{
    protected $table = 'mannequins';

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'city',
        'instagram',
        'gender',
        'birthday',
        'school',
        'height',
        'waist',
        'bust',
        'hips',
        'shoe_size',
        'eyes_color',
        'hair_color',
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,
            'mannequins_categories',
            'mannequin_id',
            'category_id'
        );
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }
}