<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ShadeCard;
use Illuminate\Http\JsonResponse;

class ShadeCardController extends Controller
{
    public function index(): JsonResponse
    {
        $shadeCards = ShadeCard::all();
        
        return response()->json([
            'status' => 'success',
            'data' => $shadeCards,
        ]);
    }
}
