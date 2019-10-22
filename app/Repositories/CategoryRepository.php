<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    private $_model;

    public function __construct(Category $category)
    {
        $this->_model = $category;
    }
}
