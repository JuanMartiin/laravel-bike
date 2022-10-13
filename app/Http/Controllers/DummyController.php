<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  //inyección de dependecias

class DummyController extends Controller
{
    
    function any(Request $request){ //request tiene que ser el primer parametro
         
        $method = $request->method();
        return 'any, has llegado con el método: ' . $method;
        //return view('...')
    }
    function delete(){
        
        return 'delete';
    }
    function get(){
        
        //return 'get: ' . csrf_token();
        return view('dummy.get');
    }
    function post(){
        
        return 'post';
    }
    function put(){
        
        return 'put';
    }
    
    
    
}
