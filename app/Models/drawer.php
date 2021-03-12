<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drawer extends Model
{
    use HasFactory;
    public function characters(){
        return $this->hasMany(character::class);   
    }
    public static function add($request){
        $drawer = new Drawer;
        $drawer->name = $request->name;
        $drawer->birth_year = $request->birth_year;
        $drawer->nationality = $request->nationality;
        $drawer->description = $request->description;
        $drawer->save();
        return ;
    }
    public static function modifyOne($request){
        // dd($request);
        $drawer = Drawer::find($request->id);
        $drawer->name = $request->name;
        $drawer->birth_year = $request->birth_year;
        $drawer->nationality = $request->nationality;
        $drawer->description = $request->description;
        $drawer->save();
        return;
    }
}
