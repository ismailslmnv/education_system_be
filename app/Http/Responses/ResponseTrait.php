<?php
namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

trait ResponseTrait {

    public function success($data = null, $message = null, $code = 200): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message
        ], $code);
    }
    public function error($message = null, $code = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ], $code);
    }
}