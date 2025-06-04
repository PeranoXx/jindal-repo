<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
                $query->select('id', 'name', 'title', 'description', 'image', 'category_id');
            }])
            ->where('status', true)
            ->get()
            ->map(function ($category) {
                return [
                    'category_id' => $category->id,
                    'category_name' => $category->name,
                    'category_description' => $category->description,
                    'products' => $category->products->map(function ($product) {
                        return [
                            'id' => $product->id,
                            'name' => $product->name,
                            'title' => $product->title,
                            'description' => $product->description,
                            'image' => $product->image,
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
} 