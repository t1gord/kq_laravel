<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    public function sendResponse($result, int $code = 200): JsonResponse
    {
        return response()->json(
            [
                'data' => $result,
            ],
            $code
        );
    }


    public function sendError($message, string $errorCode = 'UnknownError', int $code = 400): JsonResponse
    {
        return response()->json(
            [
                'error' => [
                    'message' => $message,
                    'code' => $errorCode,
                ],
            ],
            $code
        );
    }
}
