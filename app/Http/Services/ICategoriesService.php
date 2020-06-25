<?php


namespace App\Http\Services;


use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface ICategoriesService
{
    /**
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request);

    /**
     * @param Request $request
     * @param int     $id
     * @return mixed
     */
    public function update(Request $request, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);
}
