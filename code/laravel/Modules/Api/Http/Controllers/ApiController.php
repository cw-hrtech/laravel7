<?php

namespace Modules\Api\Http\Controllers;

use Illuminate\Routing\Controller;

class ApiController extends Controller
{
    public function index()
    {
        $data = config('api');
        return \response()->json($data);
    }
}
