<?php
namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface
{
    public function all();

    public function getByName($category);

}
