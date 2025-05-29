<?php

namespace AloneWebMan\Cors;

class Mid {
    public function process($request, $next) {
        $response = $request->method() == 'OPTIONS' ? response('') : $next($request);
        return alone_cors($response, $request);
    }
}