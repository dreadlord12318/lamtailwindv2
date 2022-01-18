<?php

namespace App\Http\Controllers;
use App\Http\Requests\TransactionRequest;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function show()
    {
            return view('index');
    }

    public function getData(TransactionRequest $request)
    {
       
        
    //  return $request->all();
        
return view('/test', compact('request'));
      
    }
}
