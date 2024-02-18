<?php
namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function getVendor()
    {

        $vendors = Vendor::select('id', 'name')->get();
        return response()->json($vendors);
    }
}