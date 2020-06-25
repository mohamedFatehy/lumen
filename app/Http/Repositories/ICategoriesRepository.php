<?php


namespace App\Http\Repositories;


use Illuminate\Http\Request;

interface ICategoriesRepository
{

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id);

    /**
     * @param array $data
     * @param int   $id
     * @return mixed
     */
    public function update(array $data, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);
}
