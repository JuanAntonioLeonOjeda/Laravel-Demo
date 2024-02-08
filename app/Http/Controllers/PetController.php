<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetModel;

class PetController extends Controller
{
    public function displayPets(){
        $pets = PetModel::all();
        return view('allPets', ['list' => $pets]);
    }

    public function showOnePet($id) {
        $pet = PetModel::find($id);
        return view('onePet', ['data' => $pet]);
    }

    public function petCreator() {
        return view ('petCreator');
    }

    public function createPet(Request $request) {
        $pet = PetModel::create([
            'name' => $request->name,
            'age' => $request->age,
            'food' => $request->food
        ]);
        return redirect('/pets');
    }
}
