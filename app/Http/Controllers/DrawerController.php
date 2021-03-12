<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drawer;
class DrawerController extends Controller
{
    public function addDrawer(Request $request) 
    {
        drawer::add($request);
        return redirect("/drawers");
    }
    public function deleteDrawer(Request $request) 
    {
        $drawer = Drawer::find($request->id);
        
        if( isset($drawer->characters[0])){
            $request->session()->flash('status', 'Dessinateur associer à un personage !');
            // dd($drawer->characters); 
            return redirect('/drawers');
        }else{
           
            Drawer::destroy($request->id);
            return redirect('/drawers');
        }

        }
    public function modifyOne( Request $request){
        drawer::modifyOne( $request);
        return redirect("/drawers");
    }
}
