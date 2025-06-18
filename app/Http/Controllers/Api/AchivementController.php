<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Achivement;
use Illuminate\Http\Request;

class AchivementController extends Controller
{
    public function index()
    {
        $achivements = Achivement::all();
        return response()->json($achivements);
    }
}
