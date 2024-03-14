<?php
// Path: app/Http/Controllers/WebController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        $customers = DB::table('customer')->get();

        return view('index', ['customers' => $customers]);
    }
}