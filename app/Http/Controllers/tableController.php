<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature; 

class tableController extends Controller
{
   public function index(){
    $features = Feature::paginate(5); 
    return view('table.index', compact('features'));
   }
}
