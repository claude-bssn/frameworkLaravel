<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Drawer;
class NavController extends Controller
{
    public function home(){
        return view('home');
    }
    public function drawers(){
        $drawers = Drawer::all();
        return view('drawers', compact('drawers'));
    }
    public function aboutDrawer($id){
        $drawer = Drawer::find($id);
        $characters = Drawer::find($id)->characters;
        return view('aboutDrawer', compact('drawer', 'characters'));
    }
    public function addDrawer(){
        return view('addDrawer');
    }
    public function modifyDrawer($id){
        $drawer = Drawer::find($id);
        return view('modifyDrawer', compact('drawer'));
    }


    
    public function characters(){
        $characters = Character::all();
        return view('characters', compact('characters'));
    }
    public function about($id){
        $character = Character::find($id);
        return view('about', compact('character'));
    }
    public function add(){
        $drawers = Drawer::all();
        return view('addCharacter', compact('drawers'));
    }
    public function modify($id){
        $character = Character::find($id);
        // dd($request);
        $drawers = Drawer::all();
        return view('modify', compact('character','drawers'));
    }
    
}
