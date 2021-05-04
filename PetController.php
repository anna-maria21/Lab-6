<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Owner;
use App\Models\Chip;

class PetController extends Controller {

    public function alldata() {
        return view('chip', ['data' => Pet::all()]);
    }

    public function showdata() {
        return view('animals', ['data' => Pet::all()]);
    }

    public function showOneChip($id) {
        $chip = Chip::find($id);
        return view('forOneChip', ['data' => $chip->pet, 'name'=>$chip->name]);
    }
    
    public function showOneChipPet($id) {
        $pet = Pet::find($id);
        return view('forOneChipPet', ['data' => $pet->chip, 'name'=>$pet->name, 'kind'=>$pet->kind]);
    }
    
    public function showOneOwner($id) {
        $owner = Owner::find($id);
        return view('forOneOwner', ['data' => $owner->pets, 'name'=>$owner->name]);
    }
    
    public function showOnePet($id) {
        $pet = Pet::find($id);
        return view('forOnePet', ['data' => $pet->owner, 'name'=>$pet->name, 'kind'=>$pet->kind]);
    }

}

