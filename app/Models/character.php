<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class character extends Model
{
    // use HasFactory;
    public function drawer(){
        return $this->belongsTo(drawer::class);   
    }
    public static function add($request){
        $character = new Character;
        $character->name = $request->name;
        $character->drawer_id = $request->drawer_id;
        $character->description = $request->description;
        $character->creation_year = $request->creation_year;
        $character->comic_book = $request->comic_book;
        
        $character->save();
        return ;
    }
    public static function modifyOne($request){
        // dd($request);
        $character = Character::find($request->id);
        $character->name = $request->name;
        $character->drawer_id = $request->drawer_id;
        $character->description = $request->description;
        $character->creation_year = $request->creation_year;
        $character->comic_book = $request->comic_book;
        $character->save();
        return;
    }
}
