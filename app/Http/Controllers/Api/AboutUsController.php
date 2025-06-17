<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs(){
        try {
            $aboutUs = AboutUs::get();

            return response()->json([
                'status' => true,
                'data' => $aboutUs
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch about us data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
