<?php

declare(strict_types=1);

namespace app\controller\api;

use think\response\Json;

class CategoryController extends BaseController
{
    /**
     * @OA\Get(
     *     path="/api/category",
     *     @OA\Response(response="200", description="An example resource")
     * )
     * @return Json
     */
    public function index(): Json
    {
        return $this->success('category');
    }
}
