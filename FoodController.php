<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Fabricator;

class FoodController extends Controller {

    public function alldata() {
        return view('food', ['data' => Food::all()]);
    }

    public function showOneFood($id) {
        $foods = Food::find($id);
        return view('forOneFood', ['data' => $foods->fabricators, 'name'=>$foods->name]);
    }
    
    public function showOneFabricator($id) {
        $fabricators = Fabricator::find($id);
        return view('forOneFabricator', ['data' => $fabricators->foods, 'name'=>$fabricators->name]);
        
    }

}

