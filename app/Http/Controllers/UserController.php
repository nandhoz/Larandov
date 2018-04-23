<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    
    
    public function index() {

//$user=DB::table('users')->get();
//dd($user);
/*$user=User::all();
return view ('users')
->with('users',$user)
->with('title','aqui esta el titulo');*/
  
$user = User::orderBy('name', 'ASC')->pluck('name', 'id')->toArray();
//dd($user);
return view('users', compact('user'));
/*trabjando la BD con datos estaticos
        if (request()->has('empty')){
            
            $user=[];
        }
        else{

            $user=['ja','je','ji','jo','ju'];

          }       
          return view ('users')
          ->with('users',$user)
          ->with('title','aqui esta el titulo');
          */
     }
     
    public function show($id){
      //   return "mostrando detalle del usuario: {$id}";
         return view ('saraya')
         ->with('iden',$id);


         }
         
    public function create(){
        return view ('usr');
         }

    public function store(Request $request){

        $user = User::where('id', $request->user_id)->get();
        return view ('saraya')
        ->with('iden',$user[0]->name);
             }
         
           
    
}
