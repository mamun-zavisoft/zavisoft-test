<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

abstract class Controller
{
    /**
     * @param  string  $message
     */
    protected function response($message = null, array $data = [], int $statusCode = 200, array $headers = [], int $options = JSON_PRESERVE_ZERO_FRACTION): JsonResponse
    {
        $content = [
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($content, $statusCode, $headers, $options);
    }
}
