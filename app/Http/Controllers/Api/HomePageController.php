<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Achivement;
use App\Models\Carousel;
use App\Models\HomePage;
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
                'carousel' => Carousel::where('status', 1)->get(),
                'infrastructure' => Infrastructure::where('status', 1)->get(),
                'machinery' => Machinery::where('status', 1)->get(),
                'reviews' => Review::get(),
                'team' => Team::where('status', 1)->get(),
                'home-page' => HomePage::first(),
                'achievements' => Achivement::where('status', 1)->get(),
            ];

            return response()->json([
                'status' => true,
                'data' => $data
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch homepage data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
} 