<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachingController extends Controller
{
    public function index(Request $request)
    {
        $food = $request->get("food");
        $drink = $request->get("drink");
        return view("index",[
            "food" => $food,
            "drink" => $drink
        ]);
    }
    
    public function form($routeParam)
    {
        return view("form", ["routeParam" => $routeParam]);
    }
    
    public function create(Request $request)
    {
        $data = $request->get("data");
        return view("complete",[
            "data" => $data
        ]);

    }
}
