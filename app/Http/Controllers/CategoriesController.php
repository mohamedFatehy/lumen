<?php

namespace App\Http\Controllers;

use App\Http\Services\ICategoriesService;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriesController extends Controller
{
    use JsonResponse;

    private $categoriesService;

    public function __construct(ICategoriesService $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }

    /**
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function index()
    {
        $categories = $this->categoriesService->getAll();
        return self::jsonResponse($categories, Response::HTTP_OK, 'all categories');
    }

    public function show(int $id)
    {
        $category = $this->categoriesService->getById($id);
        return self::jsonResponse($category, Response::HTTP_OK, 'single category');
    }

    public function store(Request $request)
    {
        $category = $this->categoriesService->create($request);
        return self::jsonResponse($category, Response::HTTP_CREATED, 'category added');
    }

    public function update(Request $request, int $id)
    {
        $this->categoriesService->update($request, $id);
        return self::jsonResponse(new \stdClass(), Response::HTTP_OK, 'category updated');
    }

    public function delete(int $id)
    {
        $this->categoriesService->delete($id);
        return self::jsonResponse(new \stdClass(), Response::HTTP_OK, 'category deleted');
    }
}
