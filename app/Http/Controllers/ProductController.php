<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store()
    {
        $data = product::create([
            'id'=>'3',
            'tittle'=>'a',
            'harga'=>'20',
            'status'=>'publish',
            'image'=>'aaa',
            
        ]);
        dd($data);
    }
}
