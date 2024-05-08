<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function all()
    {
        return Category::all();
    }

    public function getByName($category)
    {
        return Category::where('name', '=', $category)->get();
    }
}
