<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function add(Request $request) 
    {
        character::add($request);
        return redirect("/characters");
    }
    public function delete(Request $request) 
    {
        character::destroy($request->id);
        return redirect("/characters");
    }
    public function modifyOne( Request $request){
        Character::modifyOne( $request);
        // dd($request);

        return redirect("/characters");
    }

}
