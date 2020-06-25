<?php


namespace App\Traits;


trait JsonResponse
{


    /**
     * @param        $data
     * @param int    $statusCode
     * @param string $message
     * @return \Illuminate\Http\JsonResponse|object
     */
    public static function jsonResponse($data, int $statusCode = 200, string $message = '')
    {
        $response = [
            'code' => $statusCode,
            'message' => $message,
            'data' => $data
        ];
        return response()->json($response)->setStatusCode($statusCode);
    }
}
