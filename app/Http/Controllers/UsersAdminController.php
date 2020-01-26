<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\Products_model;
use App\User;
use App\User_model;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_active=5;
        $i=0;
        $products=User_model::orderBy('created_at','desc')->get();
        return view('backEnd.users.index',compact('menu_active','products','i'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User_model::findOrFail($id);
        $delete->delete();

        return redirect()->route('users_admin.index')->with('message', 'Eliminado con exito!');
    }

}
