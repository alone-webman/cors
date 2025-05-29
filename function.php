<?php

use AloneWebMan\Cors\Mid;

/**
 * 中间件
 * @return Mid
 */
function alone_mid_cors(): Mid {
    return new Mid();
}

if (!function_exists('alone_cors')) {
    /**
     * @param $response
     * @param $request
     * @return mixed
     */
    function alone_cors($response, $request = null): mixed {
        $request = $request ?? request();
        $response->withHeader("Access-Control-Allow-Credentials", "true");
        $response->withHeader("Access-Control-Allow-Origin", $request->header('origin', '*'));
        $response->withHeader("Access-Control-Allow-Methods", $request->header('access-control-request-method', '*'));
        $response->withHeader("Access-Control-Allow-Headers", $request->header('access-control-request-headers', '*'));
        return $response;
    }
}