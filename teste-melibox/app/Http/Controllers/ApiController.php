<?php

namespace App\Http\Controllers;

use App\Facades\ApiExample;
use App\Models\Users;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __invoke()
    {

        return ApiExample::get('/api/v1/Users')->json();

   }

   public function post (Request $request)
   {

        return ApiExample::post($request->all());
   }
}