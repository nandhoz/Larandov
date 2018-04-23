<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function velidate($nm,$nnm=null){
        
        if($nnm){
       return "Usuario: {$nm} Nick: {$nnm} ";
       }
       else{
           return "Usuario: {$nm} Nick: NO registra ";
       }
    }
}
