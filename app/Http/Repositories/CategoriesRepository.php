<?php


namespace App\Http\Repositories;


use App\Category;
use Illuminate\Support\Collection;

class CategoriesRepository implements ICategoriesRepository
{

    public function all(): Collection
    {
        return Category::all();
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return Category::findOrFail($id);
    }

    /**
     * @param array $data
     * @param int   $id
     * @return mixed
     */
    public function update(array $data, int $id)
    {
        return Category::findOrFail($id)->update($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        return Category::findOrFail($id)->delete();
    }
}
