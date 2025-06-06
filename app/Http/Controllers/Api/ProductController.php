<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of products grouped by categories.
     */
    public function index(): JsonResponse
    {
        try {
            $categoriesWithProducts = Category::with(['products' => function($query) {
                $query->select('id', 'name', 'title', 'description', 'image', 'category_id', 'slug');
            }])
            ->where('status', true)
            ->get()
            ->map(function ($category) {
                return [    
                    'category_name' => $category->name,
                    'products' => $category->products->map(function ($product) {
                        return [
                            'name' => $product->name ?? null,
                            'slug' => $product->slug,
                        ];
                    })
                ];
            });
            
            return response()->json([
                'status' => 'success',
                'data' => $categoriesWithProducts
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to fetch products by categories',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return response()->json([
            'status' => 'success',
            'data' => $product
        ], 200);
    }
} 