<?php


namespace App\Http\Services;


use App\Http\Repositories\ICategoriesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CategoriesService implements ICategoriesService
{
    private $categoriesRepository;

    public function __construct(ICategoriesRepository $categoriesRepository)
    {
        $this->categoriesRepository = $categoriesRepository;
    }

    public function getAll(): Collection
    {
        return $this->categoriesRepository->all();
    }

    public function create(Request $request)
    {
        return $this->categoriesRepository->create($request->all());
    }

    public function update(Request $request, int $id)
    {
        return $this->categoriesRepository->update($request->all(), $id);
    }

    public function getById(int $id)
    {
        return $this->categoriesRepository->getById($id);
    }

    public function delete(int $id)
    {
        return $this->categoriesRepository->delete($id);
    }
}
