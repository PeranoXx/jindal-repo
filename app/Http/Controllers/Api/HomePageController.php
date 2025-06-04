<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Infrastructure;
use App\Models\Machinery;
use App\Models\Review;
use App\Models\Team;
use Illuminate\Http\JsonResponse;

class HomePageController extends Controller
{
    /**
     * Get all homepage data including carousel, infrastructure, machinery, reviews, and team.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $data = [
                'carousel' => Carousel::all(),
                'infrastructure' => Infrastructure::all(),
                'machinery' => Machinery::all(),
                'reviews' => Review::all(),
                'team' => Team::all(),
            ];

            return response()->json([
                'status' => 'success',
                'data' => $data
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch homepage data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
} 