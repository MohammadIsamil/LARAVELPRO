<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function createItem(Request $request)
    {
     
        $name = $request->input('name');
        $QTY= $request->input('qty');
        $vendor_id = $request->input('vendor_id');

        try {
            DB::table('items')->insert([
                'name' => $name,
                'QTY' => $QTY,
                'vendor_id' => $vendor_id,
            ]);
            
            
         
            return redirect('/');
        } catch (\Exception $e) {
        
            return response()->json(['error' => 'Error inserting data', 'message' => $e->getMessage()], 500);
        }
    }
}
