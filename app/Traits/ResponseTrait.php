<?php

namespace App\Traits;

Trait ResponseTrait {
    public function responseSuccess($data, $message = 'Successfully Fetched Data')
    {
        /**
         * success response
         * @param array|object $data
         * @param string $message
         * @return JsonResponse
         */
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'errors' => null,
        ]);
    }

    public function responseError($errors, $message = 'Data not found')
    {
        /**
         * error response
         * @param array|object $data
         * @param string $message
         * @return JsonResponse
         */
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'errors' => $errors,
        ]);
    }
}


?>
