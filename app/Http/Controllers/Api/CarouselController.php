<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        dd("here");
        $carousels = Carousel::where('status', true)
            ->select('id', 'title', 'description', 'image')
            ->get()
            ->map(function ($carousel) {
                $carousel->image = $carousel->image ? asset('storage/' . $carousel->image) : null;
                return $carousel;
            });

        return response()->json([
            'status' => 'success',
            'data' => $carousels
        ]);
    }
} 