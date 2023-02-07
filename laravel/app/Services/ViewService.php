<?php

namespace App\Services;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class ViewService
 * @package App\Services
 */
class ViewService
{
    /**
     * @param Request $request
     * @return Renderable
     */
    public function render(Request $request): Renderable
    {
        $pathInfo = $request->path();
        if (empty($pathInfo)) {
            return view('frontend::index');
        }

        try {
            // DB SELECT
            $data = DB::table('contents')->where('segment', $pathInfo)->first();

            if (empty($data)) {
                return view('frontend::error');
            }

            return view('frontend::' . $data->template);
        } catch (Exception $e) {
            return view('frontend::error', [
                'code' => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }
    }
}
